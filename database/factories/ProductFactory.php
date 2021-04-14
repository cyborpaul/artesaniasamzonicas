<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name'=>$this->faker->randomElement(['Collares','Pulseras TXT','Anaconda','Huairurin','Lentejas Plus','Sandalias amazon','Gorras Huayruros','Zapatos','Aretes Neyer','Calzoncillos Arthour','Anillos Gonzalo','Piercing Charapas','Utencilios']),
            'stock'=>$this->faker->randomElement(['12','100','12', '15', '20' , '98','50','60']),
            'price'=>$this->faker->randomElement(['12.21','150.20','16.30','15.24', '13.45', '14.15'])
        ];
    }
}
