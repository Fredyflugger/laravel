<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<5; $i++) {
            $data[] = [
                'categories' => $objFaker->word
            ];
        }

        return $data;
    }
}
