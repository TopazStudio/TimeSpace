<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 19/06/18
 * Time: 10:49 AM
 */

namespace App\Service;


use App\Models\Group;
use App\Models\Group_Member;
use App\Util\CRUD\HandlesImages;
use Illuminate\Http\Request;

class GroupService extends CRUDService
{

    protected $picPath = "groupPics";

    protected $picType = "group";

    public function getModelType()
    {
        return 'App\Models\Group';
    }

    public function getEventChannel()
    {
        return 'group';
    }

    public function getPolymorphicName()
    {
        return 'group';
    }

    public function joinGroup(Request $request){
        //CHECK IF GROUP IS HIDDEN
        try {
            $group = Group::find($request->group_id);
            if ($group->group_type == "HIDDEN"){
                $this->errors['join_group'] = 'You cannot join this group via requests. Please contact the 
                group admin for registration.';
                $this->status = 403;
                return empty($this->errors);
            }else if ($group->group_type == "PUBLIC"){
                $this->data = Group_Member::create([
                    'group_id' => $request->group_id,
                    'user_id' => $request->user_id,
                    'join_status' => "JOINED"
                ]);
                $this->status = 200;
                return empty($this->errors);
            }else if($group->group_type == "PRIVATE"){
                $this->data = Group_Member::create([
                    'group_id' => $request->group_id,
                    'user_id' => $request->user_id,
                    'join_status' => "PENDING"
                ]);
                //todo: Send request to owner
                $this->status = 200;
                return empty($this->errors);
            }else{
                $this->errors['join_group'] = "not_applicable";
                $this->status = 500;
                return empty($this->errors);
            }
        } catch (\Exception $e) {
            $this->errors['join_group'] = $e->getMessage();
            $this->status = 500;
            return empty($this->errors);
        }
    }

    public function leaveGroup(Request $request){
        //CHECK IF GROUP IS HIDDEN
        try {
            if ($model = Group_Member::where([
                ['user_id','=',$request->user_id],
                ['group_id','=',$request->group_id]
            ])->first()){
                if ($model->delete()){
                    $model->join_status = "LEFT";
                    $this->data = $model;
                    $this->status = 200;
                    return empty($this->errors);
                }else{
                    $this->errors['leave_group'] = "delete_failed";
                    $this->status = 500;
                    return empty($this->errors);
                }

            }else{
                $this->errors['leave_group'] = "not_found";
                $this->status = 404;
                return empty($this->errors);
            }
        } catch (\Exception $e) {
            $this->errors['leave_group'] = $e->getMessage();
            $this->status = 500;
            return empty($this->errors);
        }

        //TODO: inform others.
    }
}