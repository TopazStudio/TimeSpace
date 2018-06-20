<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 19/06/18
 * Time: 10:49 AM
 */

namespace App\Service;


use App\Util\CRUD\HandlesImages;

class GroupService extends Service
{
    /**
     * Initialize pic-path and pic-type
     */
    public function __construct(){
        $this->picPath = "groupPics";
        $this->picType = "group";
    }

    public function getModelType()
    {
        return 'App\Models\Group';
    }

    public function getEventChannel()
    {
        return 'group';
    }
}