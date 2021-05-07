<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Insertion données 
         DB::table('assistances')->insert([
            [
                'id'=>1,
                 'title_assistance'=>'assistance numérique',
                 'description-assistance'=>'Text explicant le service d\'assistance numérique, pour qui , son objectif et par qui est-il réalisé',                    
                 'role_assistance' =>'Text explicant le rôle, son fonctionnement, ses modalités, quels sont les services proposés par l\'assistance numérique, son  fonctionnement'       
            ]    
                ]);
    }
}