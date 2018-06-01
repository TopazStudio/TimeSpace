<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([
            'name' => 'ORGANIZATION_ADMIN',
            'description' =>
                'Able to create new classes/exams/meetings/groups
                for the organization.',
            'display_name' => 'Organization Administrator'
        ])->perms()->attach(
            \App\Models\Permission::where('name','manage-organization')
                ->where('name','manage-organization-group')
                ->where('name','manage-organization-meeting')
                ->where('name','manage-organization-class')
                ->where('name','reschedule-class')
                ->get()
        );

        \App\Models\Role::create([
            'name' => 'ADMIN',
            'description' =>
                'Able to alter settings of the system.',
            'display_name' => 'System Administrator'
        ]);

        \App\Models\Role::create([
            'name' => 'STUDENT',
            'description' =>
                'Able to join school related groups. This groups have to 
                comply with the organization administrator on decisions made.',
            'display_name' => 'Student'
        ]);

        \App\Models\Role::create([
            'name' => 'USER',
            'description' =>
                'Able to create new classes/exams/meetings/groups/workouts/studies
                for his/her own personal timetable.',
            'display_name' => 'A normal user'
        ])->perms()->attach(
            \App\Models\Permission::where('name','manage-personal-meeting')
                ->where('name','vote-meeting')
                ->where('name','manage-excuse')
                ->where('name','manage-personal-workout')
                ->where('name','manage-personal-timetable   ')
                ->where('name','manage-personal-event')
                ->where('name','manage-personal-study')
                ->where('name','manage-personal-class')
                ->where('name','manage-personal-exam')
                ->where('name','manage-personal-group')
                ->where('name','manage-followers')
                ->where('name','manage-following')
                ->get()
        );

        \App\Models\Role::create([
            'name' => 'TEACHER',
            'description' => 'Able to accept/reject excuses on in-attendance
            of student roled users.',
            'display_name' => 'Teacher of a subject(class)'
        ])->perms()->attach(
            \App\Models\Permission::where('name','reschedule-class')
                ->where('name','respond-to-excuses')
                ->get()
        );
    }
}
