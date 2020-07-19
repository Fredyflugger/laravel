<?php

use Illuminate\Database\Seeder;

class CategoryNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_news')->insert($this->getData());
    }
    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<20; $i++) {
            $data[] = [
                'category_id' => $objFaker->numberBetween($min = 1, $max = 5),
                'news_id' => $objFaker->numberBetween($min = 1, $max = 20),
            ];
        }

        return $data;
    }
}
