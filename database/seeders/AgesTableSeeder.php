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
                'ageId' => 0,
                'ageRange' => '0~10歳',
            ],
            [
                'ageId' => 1,
                'ageRange' => '11~20歳',
            ],
            [
                'ageId' => 2,
                'ageRange' => '21~30歳',
            ],
            [
                'ageId' => 3,
                'ageRange' => '31~40歳',
            ],
            [
                'ageId' => 4,
                'ageRange' => '41~50歳',
            ],
            [
                'ageId' => 5,
                'ageRange' => '51~60歳',
            ],
            [
                'ageId' => 6,
                'ageRange' => '61~70歳',
            ],
            [
                'ageId' => 7,
                'ageRange' => '71~80歳',
            ],
            [
                'ageId' => 8,
                'ageRange' => '81~90歳',
            ],
            [
                'ageId' => 9,
                'ageRange' => '91~100歳',
            ],
        ];
        DB::table('ages')->insert($array);
    }
}
