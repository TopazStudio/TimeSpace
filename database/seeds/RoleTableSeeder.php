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
        $model = \App\Models\Role::create([
            'name' => 'ORGANIZATION_ADMIN',
            'description' =>
                'Able to create new classes/exams/meetings/groups
                for the organization.',
            'display_name' => 'Organization Administrator'
        ])->perms();

        $model->attach(App\Models\Permission::where('name','manage-organization')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-organization-group')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-organization-meeting')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-organization-class')->get()->first());
        $model->attach(App\Models\Permission::where('name','reschedule-class')->get()->first());

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

        $model = \App\Models\Role::create([
            'name' => 'USER',
            'description' =>
                'Able to create new classes/exams/meetings/groups/workouts/studies
                for his/her own personal timetable.',
            'display_name' => 'A normal user'
        ])->perms();

        $model->attach(App\Models\Permission::where('name','vote-meeting')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-excuse')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-workout')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-timetable')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-event')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-study')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-class')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-exam')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-personal-group')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-followers')->get()->first());
        $model->attach(App\Models\Permission::where('name','manage-following')->get()->first());


        $model = \App\Models\Role::create([
            'name' => 'TEACHER',
            'description' => 'Able to accept/reject excuses on in-attendance
            of student roled users.',
            'display_name' => 'Teacher of a subject(class)'
        ])->perms();

        $model->attach(App\Models\Permission::where('name','reschedule-class')->get()->first());
        $model->attach(App\Models\Permission::where('name','respond-to-excuses')->get()->first());
    }
}
