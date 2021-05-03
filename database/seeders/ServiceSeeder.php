<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertion données 
        DB::table('services')->insert([
            [
                'id'=>1,
                'services_name'=>'Bricolage',
                'description'=>'service de bricolage à domicile',
            ],
            [
                'id'=>2,
                'services_name'=>'Assistance Numérique',
                'description'=>'service d\'assistance numérique',
            ]
        ]);
    }
}