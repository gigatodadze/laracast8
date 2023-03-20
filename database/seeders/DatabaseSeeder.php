<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $user = User::factory()->create(['name'=>'John Doe']);

        Post::factory(5)->create(
            [
                'user_id'=>$user->id
            ]);


        //$work = Category::create([
        //    'name' => 'Work',
        //    'slug' => 'work',
        //]);
        //
        //$family = Category::create([
        //    'name' => 'Family',
        //    'slug' => 'family',
        //]);
        //
        //$personal = Category::create([
        //    'name' => 'Personal',
        //    'slug' => 'personal',
        //]);
        //
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $family->id,
        //    'title' => 'My family Post',
        //    'slug' => 'my-family-post',
        //    'excerpt' => '<p> Lorem ipsum dolar sit amet.</p>',
        //    'body' => '<p> Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet</p>',
        //]);
        //
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $work->id,
        //    'title' => 'My work Post',
        //    'slug' => 'my-work-post',
        //    'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //    'body' => '<p>Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet</p>',
        //]);
        //
        //Post::create([
        //    'user_id' => $user->id,
        //    'category_id' => $personal->id,
        //    'title' => 'My personal Post',
        //    'slug' => 'my-personal-post',
        //    'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //    'body' => '<p>Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet Lorem ipsum dolar sit amet</p>',
        //]);

    }
}
