<?php

use Illuminate\Database\Seeder;

class TimeTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('time_tables')->delete();
        
        \DB::table('time_tables')->insert(array (
            0 => 
            array (
                'owner_id' => 102,
                'group_id' => 1,
                'name' => 'Personal Timetable',
                'type' => 'personal',
                'status' => 1,
                'color' => 0,
                'priority' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'owner_id' => 103,
                'group_id' => 1,
                'name' => 'Personal Timetable',
                'type' => 'personal',
                'status' => 1,
                'color' => 0,
                'priority' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}