<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(5)->create();

        \DB::table('categories')->insert($this->getData());

    }

    public function getData() : array
    {
        $faker = Factory::create();
        $data = [];

        for($i = 0; $i < 10; $i++) {
			$data[] = [
				'name' => $faker->sentence(mt_rand(3,10)),
				'description' => $faker->text(250),
				'color' => $faker->hexColor,
				'created_at' => now(),
				'updated_at' => now()
			];
		}
        return $data;
    }
}
