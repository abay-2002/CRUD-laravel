<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            Product::create([
                'name' => $faker->name,
                'qty' => $faker->random_int,
                'price' => $faker->random_digit,
                'description' => $faker->sentence,
                'publish_date' => $faker->date,
            ]);
        }
    }
}
