<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // DeptsTableSeeder::class,
            // EmployeesTableSeeder::class,
            AccountsTableSeeder::class,
            TagsTableSeeder::class,
            DiariesTableSeeder::class,
            DiaryTagTableSeeder::class,
        ]);
    }
}
