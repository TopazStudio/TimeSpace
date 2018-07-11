<?php

use Illuminate\Database\Seeder;

class MeetingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('meetings')->delete();
        
        \DB::table('meetings')->insert(array (
            0 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Vagram',
                'color' => '#5ea2d4',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.',
            ),
            1 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Zaam-Dox',
                'color' => '#23fa7b',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Sed sagittis.',
            ),
            2 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Cookley',
                'color' => '#99d75e',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Praesent lectus.',
            ),
            3 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Veribet',
                'color' => '#2037f5',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
            ),
            4 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Opela',
                'color' => '#a032ca',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Etiam justo.',
            ),
            5 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Job',
                'color' => '#f70aed',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Vestibulum ac est lacinia nisi venenatis tristique.',
            ),
            6 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Temp',
                'color' => '#fb37b4',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Nam dui.',
            ),
            7 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Pannier',
                'color' => '#cb4dd0',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Morbi ut odio.',
            ),
            8 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Tresom',
                'color' => '#fb7f5a',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Cras non velit nec nisi vulputate nonummy.',
            ),
            9 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Tres-Zap',
                'color' => '#497ebd',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Aenean fermentum.',
            ),
            10 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Tampflex',
                'color' => '#550b5d',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Donec dapibus.',
            ),
            11 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Redhold',
                'color' => '#c945e3',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Nullam sit amet turpis elementum ligula vehicula consequat.',
            ),
            12 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Voltsillam',
                'color' => '#65e47e',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Ut tellus.',
            ),
            13 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Overhold',
                'color' => '#773aec',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'In congue.',
            ),
            14 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Daltfresh',
                'color' => '#8635d6',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.',
            ),
            15 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Job',
                'color' => '#b37d46',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'In hac habitasse platea dictumst.',
            ),
            16 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Stim',
                'color' => '#3bd4c5',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Suspendisse potenti.',
            ),
            17 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Viva',
                'color' => '#564339',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.',
            ),
            18 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Span',
                'color' => '#bf41f4',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Praesent lectus.',
            ),
            19 => 
            array (
                'owner_id' => 1,
                'time_table_id' => 1,
                'name' => 'Stringtough',
                'color' => '#501559',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'summary' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            ),
        ));
        
        
    }
}