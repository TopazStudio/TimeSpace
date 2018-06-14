<?php

namespace App\Service;

use App\Events\CRUDEvent;
use App\Util\CRUD\CRUDService;
use App\Util\CRUD\HandlesCRUD;
use App\Util\CRUD\HandlesImages;
use App\Util\CRUD\HandlesRoles;

/**
 * Created by PhpStorm.
 * User: erick
 * Date: 5/24/18
 * Time: 12:52 AM
 */

class UserService extends Service{

    use HandlesImages;
    /**
     * Initialize pic-path and pic-type
     */
    public function __construct(){
        $this->picPath = "userPics";
        $this->picType = "user";
    }

    public function getModelType()
    {
        return 'App\Models\User';
    }

    public function getEventChannel()
    {
        return 'user';
    }

    public function afterCreate($request, $model)
    {
        parent::afterCreate($request,$model);

//        $this->assignRole($request,$model);

        //TODO: make Transactable. Should be atomic if it fails
        //IF THE USER HAS TEMPORARY PICTURES SAVE THEM
        if($request->has("with_temp_pics")){
            $pics = [];
            foreach ($request->pictures as $picture){
                $pics[] = $this->saveImagesFromTemp($picture,$model->id);
            }
            $this->data['pictures'] = $pics;
        }

        return true;
    }

}