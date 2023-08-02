<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {        
        DB::table('posts')->insert([
            'title' => 'Primeiro post',
            'content' => 'Conteúdo do primeiro post',
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => 'Segundo post',
            'content' => 'Conteúdo do segundo post',
            'category_id' => 2,
        ]);
    }
}
