<?php
/**
 * Created by PhpStorm.
 * User: KIRABUI-PC
 * Date: 6/12/2018
 * Time: 1:32 AM
 */

namespace App\Service;


use App\Events\CRUDEvent;
use App\Util\CRUD\CRUDService;
use App\Util\CRUD\HandlesCRUD;
use App\Util\CRUD\HandlesRoles;

class Service implements CRUDService
{
    use HandlesCRUD,HandlesRoles;

    public function getModelType()
    {
        return '';
    }

    public function getEventChannel()
    {
        return '';
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