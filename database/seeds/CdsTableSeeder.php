<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cds')->truncate();
        DB::table('cds')->insert([
            [
                'parent_cd_id' => null,
                'title' => '小さな丸い好日',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => null,
                'title' => '桜の木の下',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => null,
                'title' => '夏服',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => null,
                'title' => '秋　そばにいるよ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => null,
                'title' => '暁のラブレター',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'parent_cd_id' => 1,
                'title' => 'あした',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 1,
                'title' => 'ナキ・ムシ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 2,
                'title' => '花火',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 2,
                'title' => 'カブトムシ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 2,
                'title' => '桜の時',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 3,
                'title' => 'ボーイフレンド',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 3,
                'title' => '初恋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 3,
                'title' => 'ロージー',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 4,
                'title' => 'おやすみなさい',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 4,
                'title' => 'あなたと握手',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 4,
                'title' => '今度までには',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 5,
                'title' => '蝶々結び',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 5,
                'title' => 'アンドロメダ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'parent_cd_id' => 5,
                'title' => 'えりあし',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
