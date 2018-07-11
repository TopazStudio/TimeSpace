<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'building' => NULL,
                'floor' => NULL,
                'room' => NULL,
                'locatable_type' => 'clazz',
                'locatable_id' => 3,
                'created_at' => '2018-07-10 11:10:53',
                'updated_at' => '2018-07-10 11:10:53',
                'latLng' => '-1.3938636,36.7442377',
                'address' => 'Ongata Rongai, Kenya',
            ),
            1 => 
            array (
                'building' => NULL,
                'floor' => NULL,
                'room' => NULL,
                'locatable_type' => 'clazz',
                'locatable_id' => 5,
                'created_at' => '2018-07-10 12:04:05',
                'updated_at' => '2018-07-10 12:04:05',
                'latLng' => '-1.3938636,36.7442377',
                'address' => 'Ongata Rongai, Kenya',
            ),
            2 => 
            array (
                'building' => NULL,
                'floor' => '1',
                'room' => 'MSB3',
                'locatable_type' => 'clazz',
                'locatable_id' => 26,
                'created_at' => '2018-07-10 14:27:17',
                'updated_at' => '2018-07-10 14:27:17',
                'latLng' => '-1.3938636,36.7442377',
                'address' => 'Ongata Rongai, Kenya',
            ),
            3 => 
            array (
                'building' => NULL,
                'floor' => '1',
                'room' => 'MSB3',
                'locatable_type' => 'clazz',
                'locatable_id' => 27,
                'created_at' => '2018-07-10 15:02:06',
                'updated_at' => '2018-07-10 15:02:06',
                'latLng' => '-1.3938636,36.7442377',
                'address' => 'Ongata Rongai, Kenya',
            ),
        ));
        
        
    }
}