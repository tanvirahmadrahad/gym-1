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

// Forward request to Laravel's public entrypoint
require __DIR__.'/../public/index.php';
