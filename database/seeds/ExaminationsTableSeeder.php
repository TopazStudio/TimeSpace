<?php

use Illuminate\Database\Seeder;

class ExaminationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('examinations')->delete();
        
        \DB::table('examinations')->insert(array (
            0 => 
            array (
                'owner_id' => 1,
                'subject_id' => 1,
                'time_table_id' => 1,
                'name' => 'fsadfdsaf',
                'type' => 'END',
                'color' => '#0040FF',
                'description' => 'fsadfsad',
                'note' => 'fsadfsad',
                'created_at' => '2018-07-11 07:33:47',
                'updated_at' => '2018-07-11 07:33:47',
            ),
            1 => 
            array (
                'owner_id' => 1,
                'subject_id' => 7,
                'time_table_id' => 1,
                'name' => 'Vagram',
                'type' => 'RAT',
                'color' => '#2f6848',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'owner_id' => 1,
                'subject_id' => 2,
                'time_table_id' => 1,
                'name' => 'Sonsing',
                'type' => 'OPEN',
                'color' => '#80731b',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'owner_id' => 1,
                'subject_id' => 19,
                'time_table_id' => 1,
                'name' => 'Opela',
                'type' => 'END',
                'color' => '#f6f699',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'owner_id' => 1,
                'subject_id' => 6,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'type' => 'MAIN',
                'color' => '#ae197e',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'owner_id' => 1,
                'subject_id' => 9,
                'time_table_id' => 1,
                'name' => 'Vagram',
                'type' => 'MID',
                'color' => '#d45f88',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'owner_id' => 1,
                'subject_id' => 1,
                'time_table_id' => 1,
                'name' => 'Subin',
                'type' => 'MAIN',
                'color' => '#8065c9',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'owner_id' => 1,
                'subject_id' => 10,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'type' => 'MAIN',
                'color' => '#0ff9d3',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'owner_id' => 1,
                'subject_id' => 13,
                'time_table_id' => 1,
                'name' => 'Matsoft',
                'type' => 'RAT',
                'color' => '#90e968',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'owner_id' => 1,
                'subject_id' => 8,
                'time_table_id' => 1,
                'name' => 'Y-find',
                'type' => 'RAT',
                'color' => '#460885',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'owner_id' => 1,
                'subject_id' => 19,
                'time_table_id' => 1,
                'name' => 'Duobam',
                'type' => 'OPEN',
                'color' => '#6af6c5',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'owner_id' => 1,
                'subject_id' => 16,
                'time_table_id' => 1,
                'name' => 'Domainer',
                'type' => 'END',
                'color' => '#e85029',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'owner_id' => 1,
                'subject_id' => 13,
                'time_table_id' => 1,
                'name' => 'Stronghold',
                'type' => 'MID',
                'color' => '#73ea55',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'owner_id' => 1,
                'subject_id' => 6,
                'time_table_id' => 1,
                'name' => 'Holdlamis',
                'type' => 'END',
                'color' => '#7a8147',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'owner_id' => 1,
                'subject_id' => 16,
                'time_table_id' => 1,
                'name' => 'Cookley',
                'type' => 'RAT',
                'color' => '#45e5a2',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'owner_id' => 1,
                'subject_id' => 18,
                'time_table_id' => 1,
                'name' => 'Zaam-Dox',
                'type' => 'MAIN',
                'color' => '#7d8283',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'owner_id' => 1,
                'subject_id' => 3,
                'time_table_id' => 1,
                'name' => 'Tresom',
                'type' => 'RAT',
                'color' => '#a80f68',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'owner_id' => 1,
                'subject_id' => 10,
                'time_table_id' => 1,
                'name' => 'Greenlam',
                'type' => 'MAIN',
                'color' => '#5f9229',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'owner_id' => 1,
                'subject_id' => 5,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'type' => 'MID',
                'color' => '#e2ff82',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'owner_id' => 1,
                'subject_id' => 9,
                'time_table_id' => 1,
                'name' => 'Viva',
                'type' => 'RAT',
                'color' => '#2ef0f4',
                'description' => NULL,
                'note' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}