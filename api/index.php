<?php

// Ensure writable directories in /tmp for serverless environment
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
];

foreach ($storagePaths as $path) {
    if (! is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Ensure writable SQLite database exists in /tmp populated from seed.db
$sqliteTarget = '/tmp/database.sqlite';
$seedSource = __DIR__.'/../database/seed.db';

if (! file_exists($sqliteTarget) && file_exists($seedSource)) {
    copy($seedSource, $sqliteTarget);
    chmod($sqliteTarget, 0666);
}

// Forward request to Laravel's public entrypoint
require __DIR__.'/../public/index.php';
