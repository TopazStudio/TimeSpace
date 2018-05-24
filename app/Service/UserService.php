<?php

namespace App\Service;

use App\Util\CRUD\CRUDService;
use App\Util\CRUD\HandlesCRUD;
use App\Util\CRUD\HandlesGraphQLCRUD;

/**
 * Created by PhpStorm.
 * User: erick
 * Date: 5/24/18
 * Time: 12:52 AM
 */

class UserService implements CRUDService
{
    use HandlesCRUD;

    /**
     * Initialize pic-path and pic-type
     */
    public function __construct(){

        $this->picType = $this->getModelType(); //Default polymorphic name is the full namespace
        $this->picPath = 'userPics';
    }

    public function getModelType()
    {
        return 'App\Models\User';
    }

    public function getEventChannel()
    {
        return 'user';
    }

}