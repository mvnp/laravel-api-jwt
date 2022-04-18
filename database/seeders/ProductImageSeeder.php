<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Faker\Generator;

use Illuminate\Database\Seeder;
use Illuminate\Container\Container;

class ProductImageSeeder extends Seeder
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
        $products = Product::all();

        foreach ($products as $product)
        {
            foreach (range(1, 6) as $index)
            {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $this->faker->imageUrl(600, 600, null, null, null, true),
                    'status' => $this->faker->boolean()
                ]);

                 // Reset
                $this->faker->unique(true);
            }
        }
    }
}
