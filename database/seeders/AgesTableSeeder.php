<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'agesId' => '0',
                'agesRange' => '0~10歳',
            ],
            [
                'agesId' => '1',
                'agesRange' => '11~20歳',
            ],
            [
                'agesId' => '2',
                'agesRange' => '21~30歳',
            ],
            [
                'agesId' => '3',
                'agesRange' => '31~40歳',
            ],
            [
                'agesId' => '4',
                'agesRange' => '41~50歳',
            ],
            [
                'agesId' => '5',
                'agesRange' => '51~60歳',
            ],
            [
                'agesId' => '6',
                'agesRange' => '61~70歳',
            ],
            [
                'agesId' => '7',
                'agesRange' => '71~80歳',
            ],
            [
                'agesId' => '8',
                'agesRange' => '81~90歳',
            ],
            [
                'agesId' => '9',
                'agesRange' => '91~100歳',
            ],
        ];
        DB::table('ages')->insert($array);
    }
}
