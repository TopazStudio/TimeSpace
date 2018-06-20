<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 19/06/18
 * Time: 10:48 AM
 */

namespace App\Service;


class OrganizationService extends Service
{
    /**
     * Initialize pic-path and pic-type
     */
    public function __construct(){
        $this->picPath = "organizationPics";
        $this->picType = "organization";
    }

    public function getModelType()
    {
        return 'App\Models\Organization';
    }

    public function getEventChannel()
    {
        return 'organization';
    }
}