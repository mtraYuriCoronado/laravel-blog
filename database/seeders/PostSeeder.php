<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $post = new Post();
        
        $post->title = 'Post 1';
        $post->content = 'Contenido 1';
        $post->category = 'Categoria 1';
        $post->published_at = now();
        
        $post->save();
        */
        /*
        $post = new Post();

        $post->title = 'Post 2';
        $post->content = 'Contenido 2';
        $post->category = 'Categoria 2';
        $post->published_at = now();
        
        $post->save();  
        */
        
        // Factory
        Post::factory(100)->create();
        

    }
}

