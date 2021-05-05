<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert
        ([
            [
                'id'=>1,
                'name'=>'Bricolage',
                'description'=>'Service de bricolage à domicile',
            ],
            
            [
                'id'=>2,
                'name'=>'Assistance Numérique',
                'description'=>'Service d\'assistance numérique',
            ]
        ]);
    }
}