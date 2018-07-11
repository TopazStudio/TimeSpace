<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 9/07/18
 * Time: 4:10 PM
 */

namespace App\Service;


use App\Models\Time;

class ExaminationService extends CRUDService{

    public function getModelType()
    {
        return 'App\Models\Examination';
    }

    public function getEventChannel()
    {
        return 'examination';
    }

    public function getPolymorphicName(){
        return "examination";
    }

    public function afterCreate($request, $model)
    {
        parent::afterCreate($request, $model);

        try{
            //SAVE TIME
            if($request->has("with_time")){

                $this->data['time'] = Time::create([
                    'timable_id' => $model->id,
                    'timable_type' => $this->getPolymorphicName(),
                    'weakly_repeats' => $request->time['weakly_repeats'],
                    'start_time' => $request->time['start_time'],
                    'end_time' => $request->time['end_time'],
                ]);
            }
        }catch (\Exception $e){
            $this->errors['add'] = $e->getMessage();
            $this->status = 500;
        }

        return empty($this->errors);
    }
}