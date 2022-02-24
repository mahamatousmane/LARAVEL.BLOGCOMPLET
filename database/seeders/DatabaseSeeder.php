<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $categories=category::factory(5)->create();
        user::factory(10)->create()->each(function($user) use ($categories){
            Post::factory(rand(1,3))->create([
                'user_id'=>$User->id,
                'category_id'=>($categories->random(1)->first())->id
            ])
        })
    }
}
