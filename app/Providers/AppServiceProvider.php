<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') === 'production' || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')) {
            URL::forceScheme('https');
        }

        // Serverless SQLite database check & auto-initialization from seed.db
        if (config('database.default') === 'sqlite') {
            $dbPath = config('database.connections.sqlite.database');
            if ($dbPath === '/tmp/database.sqlite' && ! file_exists('/tmp/database.sqlite') && file_exists(database_path('seed.db'))) {
                copy(database_path('seed.db'), '/tmp/database.sqlite');
                chmod('/tmp/database.sqlite', 0666);
            }
        }
    }
}
