<?php

use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }

    public function getData()
    {
        $objFaker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<10; $i++) {
            $data[] = [
                'sourceUrl' => $objFaker->domainName
            ];
        }

        return $data;
    }
}
