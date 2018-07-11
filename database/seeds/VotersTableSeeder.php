<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('voters')->delete();
        
        
        
    }
}