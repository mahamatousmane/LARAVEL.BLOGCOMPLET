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
        $categories=category::factory(5)->create();// LE seeder va chercher la factorie pour creer 5 nom automatiquement
        user::factory(10)->create()->each(function($user) use ($categories){ //on cree 10 utilisateurs et pour chaque utilisateur on cree entre 1 et 3 posts
            Post::factory(rand(1,3))->create([ //entre 1 et3 post pour un utiliateur
                'user_id'=>$User->id,
                'category_id'=>($categories->random(1)->first())->id
            ])
        })
    }
}
