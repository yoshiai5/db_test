<?php

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Category;

class AccountCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('account_category')->truncate();

        $account_ids = Account::all()->pluck('id');
        $category_ids = Category::all()->pluck('id');

        foreach ($account_ids as $account_id) {
            foreach ($category_ids as $category_id) {
                DB::table('account_category')->insert([
                    [
                        'account_id' => $account_id,
                        'category_id' => $category_id,
                        'status' => rand(0, 1),
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime(),
                    ],
                ]);
            }
        }
    }
}
