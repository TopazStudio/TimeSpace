<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'migration' => '2018_05_24_193807_create_times_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'migration' => '2018_05_24_193902_create_meetings_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'migration' => '2018_05_24_193959_create_examinations_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'migration' => '2018_05_24_194049_create_pictures_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'migration' => '2018_05_24_194105_create_locations_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'migration' => '2018_05_24_202537_create_time_tables_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'migration' => '2018_05_24_205732_create_organizations_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'migration' => '2018_05_24_205748_create_groups_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'migration' => '2018_05_24_205853_create_workouts_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'migration' => '2018_05_24_205934_create_studies_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'migration' => '2018_05_24_210044_create_events_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'migration' => '2018_05_24_214251_create_clazzs_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'migration' => '2018_05_24_221937_create_attendances_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'migration' => '2018_05_24_223526_create_excuses_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'migration' => '2018_05_24_224524_create_documents_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'migration' => '2018_05_25_002437_create_tags_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'migration' => '2018_05_25_002456_create_tagged_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'migration' => '2018_05_25_062646_create_tasks_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'migration' => '2018_05_25_064407_create_votes_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'migration' => '2018_05_25_065110_create_voters_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'migration' => '2018_05_25_075714_create_user_followers_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'migration' => '2018_06_01_062404_add_foreign_keys_to_meetings_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'migration' => '2018_06_01_062607_add_foreign_keys_to_examinations_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'migration' => '2018_06_01_062718_add_foreign_keys_to_time_tables_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'migration' => '2018_06_01_062926_add_foreign_keys_to_workouts_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'migration' => '2018_06_01_063003_add_foreign_keys_to_studies_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'migration' => '2018_06_01_063112_add_foreign_keys_to_events_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'migration' => '2018_06_01_063314_add_foreign_keys_to_clazzs_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'migration' => '2018_06_01_071021_add_foreign_keys_to_excuses_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'migration' => '2018_06_01_071052_add_foreign_keys_to_attendances_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'migration' => '2018_06_01_071442_add_foreign_keys_to_tagged_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'migration' => '2018_06_01_071516_add_foreign_keys_to_votes_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'migration' => '2018_06_01_071538_add_foreign_keys_to_voters_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'migration' => '2018_06_01_071611_add_foreign_keys_to_user_followers_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'migration' => '2018_06_01_080409_create_roles_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'migration' => '2018_06_01_080522_create_user_roles_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'migration' => '2018_06_01_080726_add_foreign_keys_to_user_roles_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'migration' => '2018_06_01_111942_create_group_members_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'migration' => '2018_06_01_112350_add_foreign_keys_to_group_members_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'migration' => '2018_06_01_133218_create_role_permissions_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'migration' => '2018_06_01_134108_create_permissions_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'migration' => '2018_06_01_134258_add_foreign_keys_to_role_permissions_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'migration' => '2018_06_19_082507_add_foreign_keys_to_organizations_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'migration' => '2018_06_19_082537_add_foreign_keys_to_groups_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'migration' => '2018_06_23_085130_add_join_status_to_group_members_table',
                'batch' => 2,
            ),
            47 => 
            array (
                'migration' => '2018_06_23_085837_add_type_to_groups_table',
                'batch' => 3,
            ),
            48 => 
            array (
                'migration' => '2018_06_27_160313_create_invitations_table',
                'batch' => 4,
            ),
            49 => 
            array (
                'migration' => '2018_06_27_190951_add_foreign_keys_to_invitations_table',
                'batch' => 4,
            ),
            50 => 
            array (
                'migration' => '2018_07_09_122925_add_owner_id_to_tags_table',
                'batch' => 5,
            ),
            51 => 
            array (
                'migration' => '2018_07_09_150058_simplify_clazzs_table',
                'batch' => 6,
            ),
            52 => 
            array (
                'migration' => '2018_07_09_150207_added_locations_to_documents_table',
                'batch' => 6,
            ),
            53 => 
            array (
                'migration' => '2018_07_09_150254_simplify_locations_table',
                'batch' => 6,
            ),
            54 => 
            array (
                'migration' => '2018_07_09_150339_add_summary_to_meetings_table',
                'batch' => 6,
            ),
            55 => 
            array (
                'migration' => '2018_07_09_150406_add_local_location_to_pictures_table',
                'batch' => 6,
            ),
            56 => 
            array (
                'migration' => '2018_07_10_061631_add_repeatations_to_times_table',
                'batch' => 7,
            ),
        ));
        
        
    }
}