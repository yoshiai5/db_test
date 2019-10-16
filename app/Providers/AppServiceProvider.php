<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 「絵文字」保存をサポートするためのutf8mb4文字セット。
        // バージョン5.7.7より古いMySQLや、バージョン10.2.2より古いMariaDBを使用している場合に、インデックス用文字列長を明示的に設定する必要がある。
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
