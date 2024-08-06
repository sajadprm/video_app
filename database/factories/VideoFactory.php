<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name'=>$this->faker->name(),
            'url'=>'https://sample-videos.com/video321/mp4/720/big_buck_bunny_720p_1mb.mp4',
            'slug'=>$this->faker->slug(),
            'description'=>$this->faker->realText(),
            'length'=>$this->faker->randomNumber(3),
            'thumbnail'=>'https://loremflickr.com/446/240/world?random='.rand(1,999)
        ];
    }
}
