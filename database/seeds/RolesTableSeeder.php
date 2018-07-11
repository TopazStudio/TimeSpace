<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'name' => 'ORGANIZATION_ADMIN',
                'display_name' => 'Organization Administrator',
                'description' => 'Able to create new classes/exams/meetings/groups
for the organization.',
                'created_at' => '2018-06-19 09:00:55',
                'updated_at' => '2018-06-19 09:00:55',
            ),
            1 => 
            array (
                'name' => 'ADMIN',
                'display_name' => 'System Administrator',
                'description' => 'Able to alter settings of the system.',
                'created_at' => '2018-06-19 09:00:55',
                'updated_at' => '2018-06-19 09:00:55',
            ),
            2 => 
            array (
                'name' => 'STUDENT',
                'display_name' => 'Student',
                'description' => 'Able to join school related groups. This groups have to 
comply with the organization administrator on decisions made.',
                'created_at' => '2018-06-19 09:00:55',
                'updated_at' => '2018-06-19 09:00:55',
            ),
            3 => 
            array (
                'name' => 'USER',
                'display_name' => 'A normal user',
                'description' => 'Able to create new classes/exams/meetings/groups/workouts/studies
for his/her own personal timetable.',
                'created_at' => '2018-06-19 09:00:55',
                'updated_at' => '2018-06-19 09:00:55',
            ),
            4 => 
            array (
                'name' => 'TEACHER',
            'display_name' => 'Teacher of a subject(class)',
                'description' => 'Able to accept/reject excuses on in-attendance
of student roled users.',
                'created_at' => '2018-06-19 09:00:55',
                'updated_at' => '2018-06-19 09:00:55',
            ),
        ));
        
        
    }
}