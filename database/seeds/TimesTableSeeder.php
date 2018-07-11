<?php

use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('times')->delete();
        
        \DB::table('times')->insert(array (
            0 => 
            array (
                'start_time' => '2018-07-19 17:15:40',
                'end_time' => '2018-07-18 23:00:40',
                'timable_type' => 'clazz',
                'timable_id' => 5,
                'created_at' => '2018-07-10 12:04:07',
                'updated_at' => '2018-07-10 12:04:07',
                'weakly_repeats' => 1,
            ),
            1 => 
            array (
                'start_time' => '2018-07-19 17:15:40',
                'end_time' => '2018-07-18 23:00:40',
                'timable_type' => 'clazz',
                'timable_id' => 27,
                'created_at' => '2018-07-10 15:02:12',
                'updated_at' => '2018-07-10 15:02:12',
                'weakly_repeats' => 2,
            ),
            2 => 
            array (
                'start_time' => '2018-07-19 17:15:40',
                'end_time' => '2018-07-18 23:00:40',
                'timable_type' => 'clazz',
                'timable_id' => 1,
                'created_at' => '2018-07-10 11:05:55',
                'updated_at' => '2018-07-10 11:05:55',
                'weakly_repeats' => 4,
            ),
            3 => 
            array (
                'start_time' => '2018-07-19 17:15:40',
                'end_time' => '2018-07-18 23:00:40',
                'timable_type' => 'clazz',
                'timable_id' => 2,
                'created_at' => '2018-07-10 11:06:19',
                'updated_at' => '2018-07-10 11:06:19',
                'weakly_repeats' => 4,
            ),
            4 => 
            array (
                'start_time' => '2018-07-19 17:15:40',
                'end_time' => '2018-07-18 23:00:40',
                'timable_type' => 'clazz',
                'timable_id' => 3,
                'created_at' => '2018-07-10 11:11:00',
                'updated_at' => '2018-07-10 11:11:00',
                'weakly_repeats' => 6,
            ),
            5 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 1,
                'created_at' => '2017-10-31 00:00:00',
                'updated_at' => '2018-07-08 00:00:00',
                'weakly_repeats' => 0,
            ),
            6 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 2,
                'created_at' => '2017-07-17 00:00:00',
                'updated_at' => '2017-08-11 00:00:00',
                'weakly_repeats' => 0,
            ),
            7 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 3,
                'created_at' => '2017-09-22 00:00:00',
                'updated_at' => '2018-02-03 00:00:00',
                'weakly_repeats' => 0,
            ),
            8 => 
            array (
                'start_time' => '2018-07-03 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 4,
                'created_at' => '2017-10-24 00:00:00',
                'updated_at' => '2017-08-03 00:00:00',
                'weakly_repeats' => 0,
            ),
            9 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 5,
                'created_at' => '2017-09-27 00:00:00',
                'updated_at' => '2017-10-31 00:00:00',
                'weakly_repeats' => 0,
            ),
            10 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 6,
                'created_at' => '2018-04-24 00:00:00',
                'updated_at' => '2017-11-20 00:00:00',
                'weakly_repeats' => 0,
            ),
            11 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-02 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 7,
                'created_at' => '2017-12-22 00:00:00',
                'updated_at' => '2017-09-14 00:00:00',
                'weakly_repeats' => 0,
            ),
            12 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 8,
                'created_at' => '2017-12-27 00:00:00',
                'updated_at' => '2018-01-16 00:00:00',
                'weakly_repeats' => 0,
            ),
            13 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 9,
                'created_at' => '2018-04-25 00:00:00',
                'updated_at' => '2018-02-23 00:00:00',
                'weakly_repeats' => 0,
            ),
            14 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 10,
                'created_at' => '2017-09-01 00:00:00',
                'updated_at' => '2017-12-17 00:00:00',
                'weakly_repeats' => 0,
            ),
            15 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 11,
                'created_at' => '2018-06-23 00:00:00',
                'updated_at' => '2017-08-27 00:00:00',
                'weakly_repeats' => 0,
            ),
            16 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 12,
                'created_at' => '2018-02-02 00:00:00',
                'updated_at' => '2018-03-03 00:00:00',
                'weakly_repeats' => 0,
            ),
            17 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 13,
                'created_at' => '2018-01-14 00:00:00',
                'updated_at' => '2017-10-11 00:00:00',
                'weakly_repeats' => 0,
            ),
            18 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 14,
                'created_at' => '2017-12-06 00:00:00',
                'updated_at' => '2017-11-11 00:00:00',
                'weakly_repeats' => 0,
            ),
            19 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 15,
                'created_at' => '2017-07-18 00:00:00',
                'updated_at' => '2018-05-11 00:00:00',
                'weakly_repeats' => 0,
            ),
            20 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 16,
                'created_at' => '2017-09-26 00:00:00',
                'updated_at' => '2017-08-30 00:00:00',
                'weakly_repeats' => 0,
            ),
            21 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 17,
                'created_at' => '2018-05-08 00:00:00',
                'updated_at' => '2018-05-17 00:00:00',
                'weakly_repeats' => 0,
            ),
            22 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 18,
                'created_at' => '2018-02-07 00:00:00',
                'updated_at' => '2017-11-12 00:00:00',
                'weakly_repeats' => 0,
            ),
            23 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'examination',
                'timable_id' => 19,
                'created_at' => '2017-12-08 00:00:00',
                'updated_at' => '2017-10-10 00:00:00',
                'weakly_repeats' => 0,
            ),
            24 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 1,
                'created_at' => '2018-02-09 00:00:00',
                'updated_at' => '2018-04-07 00:00:00',
                'weakly_repeats' => 0,
            ),
            25 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 2,
                'created_at' => '2018-02-16 00:00:00',
                'updated_at' => '2017-11-30 00:00:00',
                'weakly_repeats' => 0,
            ),
            26 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 3,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-06-18 00:00:00',
                'weakly_repeats' => 0,
            ),
            27 => 
            array (
                'start_time' => '2018-07-03 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 4,
                'created_at' => '2017-08-20 00:00:00',
                'updated_at' => '2017-11-28 00:00:00',
                'weakly_repeats' => 0,
            ),
            28 => 
            array (
                'start_time' => '2018-07-03 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 5,
                'created_at' => '2018-04-28 00:00:00',
                'updated_at' => '2018-02-16 00:00:00',
                'weakly_repeats' => 0,
            ),
            29 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-02 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 6,
                'created_at' => '2017-10-03 00:00:00',
                'updated_at' => '2018-01-18 00:00:00',
                'weakly_repeats' => 0,
            ),
            30 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 7,
                'created_at' => '2017-12-09 00:00:00',
                'updated_at' => '2017-07-30 00:00:00',
                'weakly_repeats' => 0,
            ),
            31 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 8,
                'created_at' => '2018-05-28 00:00:00',
                'updated_at' => '2017-07-30 00:00:00',
                'weakly_repeats' => 0,
            ),
            32 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-02 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 9,
                'created_at' => '2017-07-12 00:00:00',
                'updated_at' => '2018-05-24 00:00:00',
                'weakly_repeats' => 0,
            ),
            33 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 10,
                'created_at' => '2017-12-02 00:00:00',
                'updated_at' => '2017-09-15 00:00:00',
                'weakly_repeats' => 0,
            ),
            34 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 11,
                'created_at' => '2017-10-25 00:00:00',
                'updated_at' => '2017-12-28 00:00:00',
                'weakly_repeats' => 0,
            ),
            35 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 12,
                'created_at' => '2018-04-27 00:00:00',
                'updated_at' => '2018-05-12 00:00:00',
                'weakly_repeats' => 0,
            ),
            36 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-02 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 13,
                'created_at' => '2018-01-07 00:00:00',
                'updated_at' => '2018-04-22 00:00:00',
                'weakly_repeats' => 0,
            ),
            37 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-04 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 14,
                'created_at' => '2017-10-09 00:00:00',
                'updated_at' => '2017-11-15 00:00:00',
                'weakly_repeats' => 0,
            ),
            38 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 15,
                'created_at' => '2017-10-06 00:00:00',
                'updated_at' => '2017-12-13 00:00:00',
                'weakly_repeats' => 0,
            ),
            39 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 16,
                'created_at' => '2017-12-26 00:00:00',
                'updated_at' => '2017-11-19 00:00:00',
                'weakly_repeats' => 0,
            ),
            40 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 17,
                'created_at' => '2017-09-26 00:00:00',
                'updated_at' => '2018-06-14 00:00:00',
                'weakly_repeats' => 0,
            ),
            41 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 18,
                'created_at' => '2017-09-07 00:00:00',
                'updated_at' => '2018-07-08 00:00:00',
                'weakly_repeats' => 0,
            ),
            42 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 19,
                'created_at' => '2018-04-21 00:00:00',
                'updated_at' => '2018-04-21 00:00:00',
                'weakly_repeats' => 0,
            ),
            43 => 
            array (
                'start_time' => '2018-07-09 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 20,
                'created_at' => '2018-01-27 00:00:00',
                'updated_at' => '2018-02-24 00:00:00',
                'weakly_repeats' => 0,
            ),
            44 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 21,
                'created_at' => '2017-09-27 00:00:00',
                'updated_at' => '2017-10-06 00:00:00',
                'weakly_repeats' => 0,
            ),
            45 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 22,
                'created_at' => '2017-12-02 00:00:00',
                'updated_at' => '2018-06-07 00:00:00',
                'weakly_repeats' => 0,
            ),
            46 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 23,
                'created_at' => '2017-12-10 00:00:00',
                'updated_at' => '2017-07-27 00:00:00',
                'weakly_repeats' => 0,
            ),
            47 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 24,
                'created_at' => '2017-12-16 00:00:00',
                'updated_at' => '2018-05-08 00:00:00',
                'weakly_repeats' => 0,
            ),
            48 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 25,
                'created_at' => '2018-02-10 00:00:00',
                'updated_at' => '2018-02-26 00:00:00',
                'weakly_repeats' => 0,
            ),
            49 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'clazz',
                'timable_id' => 26,
                'created_at' => '2018-03-26 00:00:00',
                'updated_at' => '2017-08-24 00:00:00',
                'weakly_repeats' => 0,
            ),
            50 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 1,
                'created_at' => '2018-04-26 00:00:00',
                'updated_at' => '2018-03-18 00:00:00',
                'weakly_repeats' => 0,
            ),
            51 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-03 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 2,
                'created_at' => '2018-05-12 00:00:00',
                'updated_at' => '2018-03-27 00:00:00',
                'weakly_repeats' => 0,
            ),
            52 => 
            array (
                'start_time' => '2018-07-03 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 3,
                'created_at' => '2017-12-25 00:00:00',
                'updated_at' => '2018-04-30 00:00:00',
                'weakly_repeats' => 0,
            ),
            53 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 4,
                'created_at' => '2018-02-14 00:00:00',
                'updated_at' => '2018-04-03 00:00:00',
                'weakly_repeats' => 0,
            ),
            54 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 5,
                'created_at' => '2018-06-02 00:00:00',
                'updated_at' => '2017-12-14 00:00:00',
                'weakly_repeats' => 0,
            ),
            55 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 6,
                'created_at' => '2017-11-11 00:00:00',
                'updated_at' => '2017-08-01 00:00:00',
                'weakly_repeats' => 0,
            ),
            56 => 
            array (
                'start_time' => '2018-07-06 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 7,
                'created_at' => '2018-02-10 00:00:00',
                'updated_at' => '2018-06-29 00:00:00',
                'weakly_repeats' => 0,
            ),
            57 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-02 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 8,
                'created_at' => '2017-08-17 00:00:00',
                'updated_at' => '2018-04-03 00:00:00',
                'weakly_repeats' => 0,
            ),
            58 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-09 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 9,
                'created_at' => '2017-11-02 00:00:00',
                'updated_at' => '2017-10-26 00:00:00',
                'weakly_repeats' => 0,
            ),
            59 => 
            array (
                'start_time' => '2018-07-04 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 10,
                'created_at' => '2017-07-13 00:00:00',
                'updated_at' => '2017-11-11 00:00:00',
                'weakly_repeats' => 0,
            ),
            60 => 
            array (
                'start_time' => '2018-07-03 00:00:00',
                'end_time' => '2018-07-04 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 11,
                'created_at' => '2018-06-06 00:00:00',
                'updated_at' => '2017-08-12 00:00:00',
                'weakly_repeats' => 0,
            ),
            61 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-04 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 12,
                'created_at' => '2018-01-19 00:00:00',
                'updated_at' => '2017-09-08 00:00:00',
                'weakly_repeats' => 0,
            ),
            62 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 13,
                'created_at' => '2017-10-08 00:00:00',
                'updated_at' => '2017-09-12 00:00:00',
                'weakly_repeats' => 0,
            ),
            63 => 
            array (
                'start_time' => '2018-07-02 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 14,
                'created_at' => '2017-10-21 00:00:00',
                'updated_at' => '2017-09-13 00:00:00',
                'weakly_repeats' => 0,
            ),
            64 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-07 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 15,
                'created_at' => '2017-07-30 00:00:00',
                'updated_at' => '2018-05-23 00:00:00',
                'weakly_repeats' => 0,
            ),
            65 => 
            array (
                'start_time' => '2018-07-07 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 16,
                'created_at' => '2018-05-15 00:00:00',
                'updated_at' => '2018-01-06 00:00:00',
                'weakly_repeats' => 0,
            ),
            66 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-08 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 17,
                'created_at' => '2017-10-28 00:00:00',
                'updated_at' => '2018-04-12 00:00:00',
                'weakly_repeats' => 0,
            ),
            67 => 
            array (
                'start_time' => '2018-07-01 00:00:00',
                'end_time' => '2018-07-01 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 18,
                'created_at' => '2018-06-19 00:00:00',
                'updated_at' => '2018-01-18 00:00:00',
                'weakly_repeats' => 0,
            ),
            68 => 
            array (
                'start_time' => '2018-07-08 00:00:00',
                'end_time' => '2018-07-06 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 19,
                'created_at' => '2018-03-04 00:00:00',
                'updated_at' => '2018-01-16 00:00:00',
                'weakly_repeats' => 0,
            ),
            69 => 
            array (
                'start_time' => '2018-07-05 00:00:00',
                'end_time' => '2018-07-05 00:00:00',
                'timable_type' => 'meeting',
                'timable_id' => 20,
                'created_at' => '2018-02-18 00:00:00',
                'updated_at' => '2017-11-22 00:00:00',
                'weakly_repeats' => 0,
            ),
            70 => 
            array (
                'start_time' => '2018-07-12 05:15:49',
                'end_time' => '2018-07-12 08:15:49',
                'timable_type' => 'examination',
                'timable_id' => 78,
                'created_at' => '2018-07-11 07:33:49',
                'updated_at' => '2018-07-11 07:33:49',
                'weakly_repeats' => 0,
            ),
        ));
        
        
    }
}