<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            "text"=>"Este es el primer comentario",
            "usedTime"=>true,
            "incidence_id"=> 1,
            "user_id"=> 1
        ]);
        DB::table('comments')->insert([
            "text"=>"Este es el segundo comentario",
            "usedTime"=>true,
            "incidence_id"=> 3,
            "user_id"=> 1
        ]);
        DB::table('comments')->insert([
            "text"=>"Este es el tercer comentario",
            "usedTime"=>true,
            "incidence_id"=> 2,
            "user_id"=> 2
        ]);
    }
}
