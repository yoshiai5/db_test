<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $parent_category_names = ['kissHug', 'milk', 'fireWorks', 'motto', 'boyfriend'];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();

        foreach ($parent_category_names as $key => $name) {
          DB::table('categories')->insert([
              [
                  'name' => $name,
                  'status' => rand(0, 1),
                  'created_at' => new DateTime(),
                  'updated_at' => new DateTime(),
              ],
          ]);
        }

        $category_ids = Category::all()->pluck('id');

        foreach ($category_ids as $id) {
            for ($i=0; $i < 5; $i++) {
                DB::table('categories')->insert([
                    [
                        'parent_category_id' => $id,
                        'name' => $faker->realText(10),
                        'status' => rand(0, 1),
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime(),
                    ],
                ]);
            }
        }
    }
}
