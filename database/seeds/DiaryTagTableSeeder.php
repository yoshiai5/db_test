<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiaryTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('diary_tag')->truncate();
        for ($i=1; $i < 51; $i++) {
            DB::table('diary_tag')->insert([
                [
                    'diary_id' => rand(1, 10),
                    'tag_id' => rand(1, 20),
                    // 下記、後から追加
                    'like_flag' => rand(0, 1),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
