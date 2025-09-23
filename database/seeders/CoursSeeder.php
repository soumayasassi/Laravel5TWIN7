<?php

namespace Database\Seeders;

use App\Models\Cours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Cours::create([
            "titre"=> "introduction Laravel" ,
            "description" => "vue d'ensemble" ,
            'duree'=> "21" ,
        ]) ;*/
        Cours::factory(10)->create();
    }
}
