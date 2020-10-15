<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $ratings = [
            0.0,
            0.5,
            1.0,
            1.5,
            2.0,
            2.5,
            3.0,
            3.5,
            4.0,
            4.5,
            5.0
        ];
        $images =['shop1.png','shop2.png','shop3.png'];
        for($i = 0; $i < 30; $i++) {
            App\Shop::create([
            "name" => $faker->name,
            "address" => $faker->address,
            "takeaway" => $faker->boolean,
            "delivery" => $faker->boolean,
            "popular" =>  $faker->boolean,
            "rating" => number_format($ratings[rand(0, 10)],1),
            "image" => 
            'banner_image'=>
            ]);
    }
}
}
