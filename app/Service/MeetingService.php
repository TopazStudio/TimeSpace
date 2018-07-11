<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 9/07/18
 * Time: 4:11 PM
 */

namespace App\Service;


class MeetingService extends CRUDService
{

    protected $picPath = "meetingPics";

    protected $picType = "meeting";

    public function getModelType()
    {
        return 'App\Models\Meeting';
    }

    public function getEventChannel()
    {
        return 'meeting';
    }

    public function getPolymorphicName()
    {
        return "meeting";
    }
}