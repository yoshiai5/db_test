<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->truncate();
        DB::table('albums')->insert([
            [
                'title' => '小さな丸い好日',
                'total_sales' => 139070,
                'highest_rainking' => 24,
                'week' => 31,
                'first_sales' => 9080,
                'released_at' => '1999-04-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '桜の木の下',
                'total_sales' => 1421378,
                'highest_rainking' => 1,
                'week' => 69,
                'first_sales' => 326160,
                'released_at' => '2000-03-01',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '夏服',
                'total_sales' => 987972,
                'highest_rainking' => 1,
                'week' => 21,
                'first_sales' => 380370,
                'released_at' => '2001-06-20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '秋　そばにいるよ',
                'total_sales' => 505750,
                'highest_rainking' => 2,
                'week' => 13,
                'first_sales' => 321390,
                'released_at' => '2002-09-04',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '暁のラブレター',
                'total_sales' => 523940,
                'highest_rainking' => 1,
                'week' => 31,
                'first_sales' => 232422,
                'released_at' => '2003-11-27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '夢の中のまっすぐな道',
                'total_sales' => 474393,
                'highest_rainking' => 1,
                'week' => 34,
                'first_sales' => 254756,
                'released_at' => '2005-03-02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '彼女',
                'total_sales' => 462122,
                'highest_rainking' => 1,
                'week' => 29,
                'first_sales' => 250059,
                'released_at' => '2006-08-23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '秘密',
                'total_sales' => 263342,
                'highest_rainking' => 2,
                'week' => 21,
                'first_sales' => 167490,
                'released_at' => '2008-04-02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'BABY',
                'total_sales' => 207702,
                'highest_rainking' => 1,
                'week' => 16,
                'first_sales' => 135541,
                'released_at' => '2010-03-31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'まとめⅠ',
                'total_sales' => 380493,
                'highest_rainking' => 2,
                'week' => 49,
                'first_sales' => 226030,
                'released_at' => '2011-02-23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'まとめⅡ',
                'total_sales' => 345540,
                'highest_rainking' => 3,
                'week' => 36,
                'first_sales' => 217455,
                'released_at' => '2011-02-23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '時のシルエット',
                'total_sales' => 147996,
                'highest_rainking' => 1,
                'week' => 15,
                'first_sales' => 101718,
                'released_at' => '2012-06-20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '泡のような愛だった',
                'total_sales' => 116838,
                'highest_rainking' => 1,
                'week' => 18,
                'first_sales' => 82051,
                'released_at' => '2014-05-28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
