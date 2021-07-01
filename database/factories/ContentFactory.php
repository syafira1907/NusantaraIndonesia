<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'slug' => Str::slug($this->faker->unique()->name, '-'),
            'deskripsi' => $this->faker->unique()->word,
            'gambar' => $this->faker->unique()->name,
            'status' => $this->faker->unique()->name,
            'category_id' => function () {
                return Category::all()->random();
            }
        ];
    }
}
