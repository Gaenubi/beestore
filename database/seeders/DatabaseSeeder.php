<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Tag::factory(3)->state(new Sequence(['name'=>'bad'], 
                                            ['name'=>'good'],
                                            ['name'=> 'ugly']))->create();
        Post::factory(20)->create();

        foreach (Post::all() as $post){
            $tags = Tag::inRandomOrder()->take(rand(1,3))->pluck('id');
            $post->tags()->attach($tags);
        }

    }
}
