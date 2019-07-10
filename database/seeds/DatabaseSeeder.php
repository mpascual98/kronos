<?php

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
      $users = factory(\App\User::class, 20)->create();

      $products = factory(\App\Product::class, 50)->create();
      $categories = factory(\App\Category::class, 3)->create();

      foreach ($products as $product) {
        $product->categories()->attach($categories->random());
      }

    }
}
