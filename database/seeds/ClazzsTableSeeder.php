<?php

use Illuminate\Database\Seeder;

class ClazzsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clazzs')->delete();
        
        \DB::table('clazzs')->insert(array (
            0 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Namfix',
                'abbreviation' => 'IL',
                'note' => NULL,
                'color' => '#ac6dbb',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Lucais Kellard',
            ),
            1 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Konklux',
                'abbreviation' => 'CO',
                'note' => NULL,
                'color' => '#bfdc76',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Karia Rubroe',
            ),
            2 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Alpha',
                'abbreviation' => 'CA',
                'note' => NULL,
                'color' => '#ed01f5',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Christopher Piens',
            ),
            3 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Gembucket',
                'abbreviation' => 'CA',
                'note' => NULL,
                'color' => '#d0f3c1',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Nerty Benyon',
            ),
            4 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Y-find',
                'abbreviation' => 'MN',
                'note' => NULL,
                'color' => '#ed4a3c',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Noland Skipsey',
            ),
            5 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Duobam',
                'abbreviation' => 'OH',
                'note' => NULL,
                'color' => '#a4ff10',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Gal Waistall',
            ),
            6 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Sub-Ex',
                'abbreviation' => 'MN',
                'note' => NULL,
                'color' => '#7ab163',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Herve Bellham',
            ),
            7 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Flowdesk',
                'abbreviation' => 'KS',
                'note' => NULL,
                'color' => '#66404b',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Gianina Rubertelli',
            ),
            8 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Rank',
                'abbreviation' => 'DC',
                'note' => NULL,
                'color' => '#19249c',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Cory Omrod',
            ),
            9 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Bamity',
                'abbreviation' => 'MN',
                'note' => NULL,
                'color' => '#f143ab',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Mel Hender',
            ),
            10 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Regrant',
                'abbreviation' => 'MO',
                'note' => NULL,
                'color' => '#373e9e',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Mariam Tarbett',
            ),
            11 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Lotstring',
                'abbreviation' => 'NY',
                'note' => NULL,
                'color' => '#e96d49',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Reine Thorington',
            ),
            12 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Bitwolf',
                'abbreviation' => 'LA',
                'note' => NULL,
                'color' => '#ae6c9b',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Juliette Delgadillo',
            ),
            13 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Trippledex',
                'abbreviation' => 'NY',
                'note' => NULL,
                'color' => '#eaba75',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Dalston Gilffilland',
            ),
            14 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Sonair',
                'abbreviation' => 'MO',
                'note' => NULL,
                'color' => '#592f16',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Carole Du Fray',
            ),
            15 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'abbreviation' => 'FL',
                'note' => NULL,
                'color' => '#5c97e2',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Webster felip',
            ),
            16 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'abbreviation' => 'ID',
                'note' => NULL,
                'color' => '#c12a0a',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Martin Silson',
            ),
            17 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Stronghold',
                'abbreviation' => 'AZ',
                'note' => NULL,
                'color' => '#a3d381',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Giffy Zupone',
            ),
            18 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Bigtax',
                'abbreviation' => 'CA',
                'note' => NULL,
                'color' => '#80ddde',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Gillie Zumbusch',
            ),
            19 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Prodder',
                'abbreviation' => 'TX',
                'note' => NULL,
                'color' => '#95157b',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'teacher_name' => 'Catherin Couve',
            ),
            20 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '#a4ff10',
                'description' => NULL,
                'created_at' => '2018-07-10 11:06:19',
                'updated_at' => '2018-07-10 11:06:19',
                'teacher_name' => 'Mrs. Khakata',
            ),
            21 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '#ac6dbb',
                'description' => NULL,
                'created_at' => '2018-07-10 11:05:52',
                'updated_at' => '2018-07-10 11:05:52',
                'teacher_name' => 'Mrs. Khakata',
            ),
            22 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '#592f16',
                'description' => NULL,
                'created_at' => '2018-07-10 12:04:05',
                'updated_at' => '2018-07-10 12:04:05',
                'teacher_name' => 'Mrs. Khakata',
            ),
            23 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '#373e9e',
                'description' => NULL,
                'created_at' => '2018-07-10 11:10:53',
                'updated_at' => '2018-07-10 11:10:53',
                'teacher_name' => 'Mrs. Khakata',
            ),
            24 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '-8388353',
                'description' => NULL,
                'created_at' => '2018-07-10 14:27:17',
                'updated_at' => '2018-07-10 14:27:17',
                'teacher_name' => 'Mrs. Khakata',
            ),
            25 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Human Computer Interaction',
                'abbreviation' => 'HCI',
                'note' => NULL,
                'color' => '-8388353',
                'description' => NULL,
                'created_at' => '2018-07-10 15:02:05',
                'updated_at' => '2018-07-10 15:02:05',
                'teacher_name' => 'Mrs. Khakata',
            ),
        ));
        
        
    }
}