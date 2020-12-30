<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '大田大輔',
            'age' => '2',
            'mail' => 'daisukeOota@taiyou.ne.jp',
            'memotype' => '2',
            'title' => '大田大輔の初めてのメモ',
            'contents' => '本日はじめてこのサービスを利用しました。粗削りですが、スッキリと機能が制限されていてよいと思います。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '大輔kssssss',
            'age' => '6',
            'mail' => 'ajfklss.adls@taiyou.ne.jp',
            'memotype' => '1',
            'title' => '初めてのメモ',
            'contents' => '本日は制限されていてよいと思います。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => 'matumaru daigo',
            'age' => '4',
            'mail' => 'softbank@gonigoni.ne.jp',
            'memotype' => '0',
            'title' => 'メモ',
            'contents' => 'よいと思います。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '佐野ラーメン',
            'age' => '1',
            'mail' => 'rahmen.sano@ou.ne.jp',
            'memotype' => '2',
            'title' => '大田大輔の初めてのメモ',
            'contents' => '本日はじめてこのサービスを利用しました。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => 'kumakura masaru',
            'age' => '7',
            'mail' => 'daisukeOota@taiyou.ne.jp',
            'memotype' => '1',
            'title' => '大田大輔メモ',
            'contents' => 'ステマ？',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => 'だいご',
            'age' => '9',
            'mail' => 'dparama@gohoeijf.ne.jp',
            'memotype' => '1',
            'title' => '大モ',
            'contents' => 'dennkik電気屋さん',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '大田',
            'age' => '2',
            'mail' => 'daisukeOota@taiyou.ne.jp',
            'memotype' => '2',
            'title' => '大田大輔',
            'contents' => 'サービス残業。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '阿部大樹',
            'age' => '5',
            'mail' => 'koboapofd@taiyou.ne.jp',
            'memotype' => '1',
            'title' => 'Ubi3e',
            'contents' => 'おまちしています。',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => 'あ',
            'age' => '6',
            'mail' => 'd@t.ne.jp',
            'memotype' => '2',
            'title' => 'あメモ',
            'contents' => 'あ',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '１０',
            'age' => '8',
            'mail' => '10a@gkkkk',
            'memotype' => '1',
            'title' => 'd;a;fjk;lasd',
            'contents' => '本10',
        ];
        DB::table('memos')->insert($param);

        $param = [
            'name' => '大正百歳太郎',
            'age' => '2',
            'mail' => 'hyakusai.tarou@zutto.ikiru.eienn',
            'memotype' => '2',
            'title' => 'わしは大正時代から生きてきた老害',
            'contents' => '若者はわしのいうことを聞いておけばよいのじゃ。年寄りを敬え。私は老害だ。',
        ];
        DB::table('memos')->insert($param);

    }
}
