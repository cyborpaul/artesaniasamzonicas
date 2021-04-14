<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name'=> $this->faker->randomElement(['Collares','Pulseras','Adornos','Telas', 'Gorro', 'LLaveros', 'Sandalias', 'Aretes', 'Amuletos']),
            'description'=> $this->faker->paragraph(),
            'image'=> $this->faker->randomElement(['C:\Users\CyborgPaul\Pictures\arbol\IMG-20200307-WA0006.jpg','C:\Users\CyborgPaul\Pictures\arbol\IMG-20200307-WA0007.jpg'])
            //
        ];
    }
}
