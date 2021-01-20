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
        //
        $param = [
            'agesId' => '0',
            'agesRange' => '0~10歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '1',
            'agesRange' => '11~20歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '2',
            'agesRange' => '21~30歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '3',
            'agesRange' => '31~40歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '4',
            'agesRange' => '41~50歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '5',
            'agesRange' => '51~60歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '6',
            'agesRange' => '61~70歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '7',
            'agesRange' => '71~80歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '8',
            'agesRange' => '81~90歳',
        ];
        DB::table('ages')->insert($param);

        $param = [
            'agesId' => '9',
            'agesRange' => '91~100歳',
        ];
        DB::table('ages')->insert($param);

    }
}
