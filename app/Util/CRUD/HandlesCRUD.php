<?php
/**
 * Created by PhpStorm.
 * User: erikn
 * Date: 9/22/2017
 * Time: 9:04 AM
 */

namespace App\Util\CRUD;

use App\Events\CRUDEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

trait HandlesCRUD
{
    use HandlesImages, HasErrorsAndInfo ;

    /**
     * Fetch model's CRUD settings
     *
     * @param $key
     * @return mixed
     */
    private function fromSettings($key){
        return (call_user_func([$this->getModelType(),'crudSettings']))[$key];
    }

    /**
     * Fetch model according to the owner. Returns only one model.
     * Models that are authorized to modify or delete this model are
     *  - User who owns the model.
     *  - User who created the model.
     *  - User with higher authority to do data manipulation. (eg. SYSTEM).
     *
     * The request must contain the owner key in order to modify the model.
     *
     * @param Request $request
     * @param $id
     * @return bool|Model
     */
    private function getModel(Request $request, $id){
        //Start query building
        $model = call_user_func_array([$this->getModelType(),'where'],['id','=',$id]); //fetch with models id

        //CHECK FOR OWNER
        foreach ($this->fromSettings('owner') as $key => $value){
            if ($request->has($key)){
                $model->where($key,'=',$request->get($key));
            }else if($value){
                //for root nodes that have no owner (i.e property type)
                $model->where($key,'=',$value);
            }else{
                $model->where($key,'=',null); //refuse
            }
        }
        //TODO: CHECK FOR AUTHORITY (i.e. SYSTEM based operation)
        //TODO: CHECK FOR AVAILABILITY

        $model = $model->get()->first(); //execute query
        if(!$model){
            $this->errors['not_authorized'][] = $id;
            return false;
        }

        return $model;
    }

    /**
     * Used to resolve the relationships of the model. This means fetching
     * the relevant ids of the foreign columns. The request must contain the
     * relation keys.
     *
     * @param Request $request
     * @return array|bool
     */
    private function resolveForeignKeys(Request $request){
        $relations = array();
        foreach ($this->fromSettings('foreign_keys') as $key => $value) {

            /**
             * If the request has the related model itself.
             * Get it from the related model
            */
            if ($request->has($key)){
                $relations[$value] = $request->{$key}[$value];
                continue;
            }
            /**
             * If the request has only the foreign key field then
             * get it from there.
            */
            else if ($request->has($value)){
                $relations[$value] = $request->{$value};
                continue;
            }
            /**
             * If there is no field. We cannot persist this to the database.
            */
            else {
                $this->info['add_exception'][] = "Foreign key ". $value . " must be resolved.";
            }
        }
        return empty($this->errors) ? $relations: false;
    }

    /**
     * Encrypt any attribute that has password as key.
     * @param $attributes
     */
    private function handlePassword(&$attributes){
        $attributes['password'] = bcrypt($attributes['password']);
    }

    /**
     * Add a Model.
     *
     * @param Request $request
     * @internal Model $model
     * @return bool
     */
    public function add(Request $request){
        $model = null;

        if ($this->fromSettings('foreign_keys')) //If the relation has foreign keys
            //Check for correct attributes and foreign keys
            if($relations = $this->resolveForeignKeys($request)){
                $attributes = array_merge(
                    $request->only($this->fromSettings('attributes')),
                    $relations
                );

            }else return false;
        else $attributes = $request->only($this->fromSettings('attributes'));

        //handle passwords
        if (array_key_exists('password',$attributes)){
            $this->handlePassword($attributes);
        }

        //Add hook before creating
        if(!$this->beforeCreate($request,$attributes))
            return empty($this->errors);

        //PERSIST
        $model = call_user_func([$this->getModelType(),'create'],$attributes);
        if($model){
            $this->info['added'] = $model;
        }else{
            $this->errors['not_added'] = $model->id;
        }

        //Add hook after creating
        if(!$this->afterCreate($request,$model))
            return empty($this->errors);

        return empty($this->errors);
    }

    /**
     * Update a Model
     *
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function update(Request $request,$id){
        //Add hook before update
        if(!$this->beforeUpdate($request,$id))
            return empty($this->errors);

        //UPDATE
        if($model = $this->getModel($request,$id)) {
            if ($model->update($request->only($this->fromSettings('attributes')))) {
                $this->info['updated'] = $model;
            } else {
                $this->errors['not_updated'] = $id;
            }
        }

        //Add hook after update
        if(!$this->afterUpdate($request,$model))
            return empty($this->errors);

        return empty($this->errors);
    }

    /**
     * Delete a Model
     *
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function delete(Request $request,$id){
        //Add hook before delete
        if(!$this->beforeDelete($request,$id))
            return empty($this->errors);

        //DELETE
        if($model = $this->getModel($request,$id)) {
            if ($model->delete()) {
                $this->info['deleted'] = $model;
            } else {
                $this->errors['not_deleted'] = $id;
            }
        }

        //Add hook after creating
        if(!$this->afterDelete($request,$model))
            return empty($this->errors);

        return empty($this->errors);
    }

    /**
     * Fetch all Models without any restriction.
     *
     * @param Request $request
     * @return bool
     * @internal param $id
     */
    public function getAll(Request $request){
        //Add hook before get_all
        if(!$this->beforeGetAll($request))
            return empty($this->errors);

        //GET ALL
        if($models = call_user_func([$this->getModelType(),'all'])) {
            if ($models) {
                $this->info['get_all'] = $models;
            } else {
                $this->errors['get_all'] = "failed";
            }
        }

        //Add hook after update
        if(!$this->afterGetAll($request,$models))
            return empty($this->errors);

        return empty($this->errors);
    }

    /**
     * Fetch a Model without any restriction.
     *
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function get(Request $request, $id){
        //Add hook before get_all
        if(!$this->beforeGet($request))
            return empty($this->errors);

        //GET
        if($model = call_user_func_array([$this->getModelType(),'where'],['id','=',$id])->get()) {
            if ($model) {
                $this->info['get'] = $model;
            } else {
                $this->errors['get'] = "not_found";
            }
        }

        //Add hook after update
        if(!$this->afterGet($request,$model))
            return empty($this->errors);

        return empty($this->errors);
    }

    //HOOKS

    public function beforeCreate($request,$attributes){
        //
        return true;
    }

    public function afterCreate($request,$model){
        $crudEvent = new CRUDEvent();
        $crudEvent->setPayload([
            'crudType' => 'created',
            'channel' => $this->getEventChannel(),
            'model' => $model
        ]);
        broadcast($crudEvent)->toOthers();
        return true;
    }

    public function beforeUpdate($request,$attributes){
        //
        return true;
    }

    public function afterUpdate($request,$model){
        $crudEvent = new CRUDEvent();
        $crudEvent->setPayload([
            'crudType' => 'updated',
            'channel' => $this->getEventChannel(),
            'model' => $model
        ]);
        broadcast($crudEvent)->toOthers();
        return true;
    }

    public function beforeDelete($request,$attributes){
        //
        return true;
    }

    public function afterDelete($request,$model){
        $crudEvent = new CRUDEvent();
        $crudEvent->setPayload([
            'crudType' => 'deleted',
            'channel' => $this->getEventChannel(),
            'model' => $model
        ]);
        broadcast($crudEvent)->toOthers();
        return true;
    }

    public function beforeGetAll($request){
        //
        return true;
    }

    public function afterGetAll($request,$models){
       //
        return true;
    }

    public function beforeGet($request){
        //
        return true;
    }

    public function afterGet($request,$model){
        //
        return true;
    }
}
