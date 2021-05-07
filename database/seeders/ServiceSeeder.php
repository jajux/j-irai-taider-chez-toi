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
                 'title_service'=>'assistance numérique',
                 'description_service'=>'Text explicant le service d\'assistance numérique, pour qui , son objectif et par qui est-il réalisé',                    
                 'role_service' =>'Text explicant le rôle, son fonctionnement, ses modalités, quels sont les services proposés par l\'assistance numérique, son  fonctionnement'       
            ],
            [
                'id'=>2,
                'title_service'=>'bricolage',
                'description_service'=>
                     'Text explicatif décrivant le service bricolage, pour qui , son objectif et par qui est-il réalisé',
                 'role_service' => 
                    'Text explicant le rôle et le fonctionnement du service bricolage; ses modalités, quels sont les services proposés'     
            ]
        ]);
    }
}