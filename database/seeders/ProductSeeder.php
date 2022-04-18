<?php

namespace Database\Seeders;

use App\Models\Product;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Container\Container;

class ProductSeeder extends Seeder
{
    /**
     * Initialize faker.
     */
    protected $faker;

    /**
     * Create a instance of faker.
     */
    public function __construct() {
        $this->faker = $this->withFaker();
    }

    /**
     * Use a method to attribute object of faker.
     */
    protected function withFaker() {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 60) as $index)
        {
            Product::create([
                'user_id' => 10,
                'name' => $this->faker->word,
                'short_description' => $this->faker->sentence,
                'description' => $this->faker->paragraph,
                'default_image' => $this->faker->imageUrl(600, 600, null, null, null, true),
                'price' => $this->faker->randomFloat(2, 250, 1000),
                'type_unity' => $this->faker->randomElement(['l', 'm', 'm2', 'm3', 'kg', 'pc', 'sc', 'un']),
                'stock' => $this->faker->numberBetween(100, 300),
                'is_featured' => $this->faker->boolean(),
                'status' => $this->faker->boolean()
            ]);

             // Reset
            $this->faker->unique(true);
        }
    }
}
