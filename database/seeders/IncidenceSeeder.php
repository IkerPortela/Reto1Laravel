<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IncidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incidences')->insert([
            "titulo"=>"Primer post",
            "texto"=>"Este es el texto del primer post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=> 1,
            "category_id"=> 2,
            "department_id"=> 3
        ]);
        DB::table('incidences')->insert([
            "titulo"=>"Segundo post",
            "texto"=>"Este es el texto del segundo post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=> 1,
            "category_id"=> 2,
            "department_id"=> 1, 
        ]);
        DB::table('incidences')->insert([
            "titulo"=>"Tercer post",
            "texto"=>"Este es el texto del tercer post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=> 1, 
            "category_id"=> 1,
            "department_id"=> 3
        ]);
    }
}
