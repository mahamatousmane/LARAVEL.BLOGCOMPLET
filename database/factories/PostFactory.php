<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    protected $model= Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(5,10),true),
            'content'=>$this->faker->sentences(5,true),
            //on donne une image arbitraire
            'image'=>'https://via.placeholder.com/100'
        ];
    }
}
