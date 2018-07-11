<?php

use Illuminate\Database\Seeder;

class ExcusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('excuses')->delete();
        
        
        
    }
}