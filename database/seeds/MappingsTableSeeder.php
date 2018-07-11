<?php

use Illuminate\Database\Seeder;

class MappingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mappings')->delete();
        
        \DB::table('mappings')->insert(array (
            0 => 
            array (
                'mapping' => 'group_mapping',
                'batch' => 1,
            ),
            1 => 
            array (
                'mapping' => 'organization_mapping',
                'batch' => 1,
            ),
            2 => 
            array (
                'mapping' => 'timetable_mapping',
                'batch' => 1,
            ),
            3 => 
            array (
                'mapping' => 'user_mapping',
                'batch' => 1,
            ),
        ));
        
        
    }
}