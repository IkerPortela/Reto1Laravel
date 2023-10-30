<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Categories;
use App\Models\Department;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "titulo"=>"Primer post",
            "texto"=>"Este es el texto del primer post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=>User::all()->random()->id,
            "category_id"=>Categories::all()->random()->id,
            "department_id"=>Department::all()->random()->id
        ]);
        DB::table('posts')->insert([
            "titulo"=>"Segundo post",
            "texto"=>"Este es el texto del segundo post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=>User::all()->random()->id,
            "category_id"=>Categories::all()->random()->id,
            "department_id"=>Department::all()->random()->id
        ]);
        DB::table('posts')->insert([
            "titulo"=>"Tercer post",
            "texto"=>"Este es el texto del tercer post",
            "publicado"=>true,
            "created_at"=>now(),
            "user_id"=>User::all()->random()->id,
            "category_id"=>Categories::all()->random()->id,
            "department_id"=>Department::all()->random()->id
        ]);
    }
}
