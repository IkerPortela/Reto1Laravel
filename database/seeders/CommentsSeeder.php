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
            "post_id"=>Post::first()->id
        ]);
        DB::table('comments')->insert([
            "text"=>"Este es el segundo comentario",
            "usedTime"=>true,
            "post_id"=>Post::first()->id
        ]);
        DB::table('comments')->insert([
            "text"=>"Este es el tercer comentario",
            "usedTime"=>true,
            "post_id"=>Post::first()->id
        ]);
    }
}
