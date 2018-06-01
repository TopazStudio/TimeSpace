<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::create([
            'name' => 'manage-personal-meeting'
        ]);
        \App\Models\Permission::create([
            'name' => 'vote-meeting'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-workout'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-event'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-study'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-exam'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-timetable'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-class'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-excuse'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-personal-group'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-followers'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-following'
        ]);

        \App\Models\Permission::create([
            'name' => 'reschedule-class'
        ]);
        \App\Models\Permission::create([
            'name' => 'respond-to-excuses'
        ]);

        \App\Models\Permission::create([
            'name' => 'manage-organization'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-organization-group'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-organization-meeting'
        ]);
        \App\Models\Permission::create([
            'name' => 'manage-organization-class'
        ]);


    }
}
