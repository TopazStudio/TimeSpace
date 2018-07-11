<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 19/06/18
 * Time: 10:48 AM
 */

namespace App\Service;


class OrganizationService extends CRUDService
{

    protected $picPath = "organizationPics";

    protected $picType = "organization";


    public function getModelType()
    {
        return 'App\Models\Organization';
    }

    public function getEventChannel()
    {
        return 'organization';
    }

    public function getPolymorphicName(){
        return "organization";
    }
}