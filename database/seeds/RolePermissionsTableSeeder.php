<?php

use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_permissions')->delete();
        
        \DB::table('role_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            6 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            8 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            9 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            11 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            13 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            15 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            16 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            17 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
        ));
        
        
    }
}