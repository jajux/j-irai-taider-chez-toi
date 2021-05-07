<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BricolageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Insertion données 
         DB::table('bricolages')->insert([
            [
                'id'=>1,
                'title_bricolage'=>'bricolage',
                'description-bricolage'=>
                     'Text explicatif décrivant le service bricolage, pour qui , son objectif et par qui est-il réalisé',
                 'role_bricolage' => 
                    'Text explicant le rôle et le fonctionnement du service bricolage; ses modalités, quels sont les services proposés'     
            ]
        ]);
    }
}