<?php

namespace App\Service;

use App\Events\CRUDEvent;
use App\Models\User;
use App\Util\CRUD\HandlesCRUD;
use App\Util\CRUD\HandlesImages;
use App\Util\CRUD\HandlesRoles;
use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: erick
 * Date: 5/24/18
 * Time: 12:52 AM
 */

class UserService extends CRUDService{

    protected $picPath = "userPics";

    protected $picType = "user";


    public function getModelType()
    {
        return 'App\Models\User';
    }

    public function getEventChannel()
    {
        return 'user';
    }

    public function getPolymorphicName(){
        return "user";
    }

    public function getDailyActivity($request){
        $day = Carbon::createFromTimestampMs($request->timestamp,"Africa/Nairobi");
        $user = User::where('id',$request->id)->with([
            'meetingsOwned',
            'examinationsOwned',
            'clazzesOwned',
        ])->get()->first();
        //ITERATE USER MEETINGS
        try{

            foreach ($user->meetingsOwned as $meeting){
                if ( $meeting != null && $meeting->time != null && $meeting->time->start_time != null){
                    if ($day->isSameDay(Carbon::createFromTimeString($meeting->time->start_time))){
                        $this->data['meetingsOwned'][] = $meeting;
                    }
                }
            }

            foreach ($user->examinationsOwned as $examination){
                if ( $examination != null && $examination->time != null && $examination->time->start_time != null) {
                    if ($day->isSameDay(Carbon::createFromTimeString($examination->time->start_time))) {
                        $this->data['examinationsOwned'][] = $examination;
                    }
                }
            }

            foreach ($user->clazzesOwned as $clazz){
                if ( $clazz != null && $clazz->time != null && $clazz->time->start_time != null) {
                    if ($day->isSameDay(Carbon::createFromTimeString($clazz->time->start_time))) {
                        $this->data['clazzesOwned'][] = $clazz;
                    }
                }
            }
        } catch (\Exception $e){
            $this->errors['getDailyActivity'] = $e->getMessage();
            $this->status = 500;
        }
//        dd($this->data);

        return empty($this->errors);
    }

    public function getMonthlyActivity($request)
    {
        $day = Carbon::createFromTimestampMs($request->timestamp,"Africa/Nairobi");
        $user = User::where('id',$request->id)->with([
            'meetingsOwned',
            'examinationsOwned',
            'clazzesOwned',
        ])->get()->first();
        //ITERATE USER MEETINGS
        try{

            foreach ($user->meetingsOwned as $meeting){
                if ( $meeting != null && $meeting->time != null && $meeting->time->start_time != null){
                    if ($day->isSameMonth(Carbon::createFromTimeString($meeting->time->start_time))){
                        $this->data['meetingsOwned'][] = $meeting;
                    }
                }
            }

            foreach ($user->examinationsOwned as $examination){
                if ( $examination != null && $examination->time != null && $examination->time->start_time != null) {
                    if ($day->isSameMonth(Carbon::createFromTimeString($examination->time->start_time))) {
                        $this->data['examinationsOwned'][] = $examination;
                    }
                }
            }

            foreach ($user->clazzesOwned as $clazz){
                if ( $clazz != null && $clazz->time != null && $clazz->time->start_time != null) {
                    if ($day->isSameMonth(Carbon::createFromTimeString($clazz->time->start_time))) {
                        $this->data['clazzesOwned'][] = $clazz;
                    }
                }
            }
        } catch (\Exception $e){
            $this->errors['getDailyActivity'] = $e->getMessage();
            $this->status = 500;
        }
//        dd($this->data);

        return empty($this->errors);
    }
}