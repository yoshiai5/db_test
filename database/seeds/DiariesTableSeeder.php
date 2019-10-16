<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('diaries')->truncate();
        for ($i=1; $i < 11; $i++) {
            DB::table('diaries')->insert([
                [
                    'account_id' => rand(1, 5),
                    'name' => $faker->realText(10),
                    'body' => $faker->realText(30),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
