<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Exception;
use PDOException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        try {
            DB::connection()->getPdo();
            echo "Connected successfully to: " . DB::connection()->getDatabaseName() . "\n";
        } catch (Exception $e) {
            abort($e instanceof PDOException ? 503 : 500);
        }
        */
    }
}
