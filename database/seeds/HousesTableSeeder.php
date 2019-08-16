<?php

use Illuminate\Database\Seeder;
use App\House; //原本沒加qq


class HousesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // 讓`seeder`知道我們要用\Faker\Factory::create()的function
        House::truncate();

        $faker = \Faker\Factory::create();

        // 開始建立欄位所需要的假資料參數到資料庫裡
        for ($i = 0; $i < 50; $i++) {
            House::create([
                'city' => $faker->city,
                'district' => $faker->streetName,
                'kind' => $faker->cityPrefix,
                'area' => $faker->numberBetween($min = 10, $max = 50),
                'pattern' => $faker->numberBetween($min = 1, $max = 5),
                'price' => $faker->numberBetween($min = 10000, $max = 50000),
            ]);
    }
}
}