<?php

// Prepare writable /tmp directories for Laravel in Vercel's read-only environment
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Forward Vercel request to Laravel's entrypoint
require __DIR__.'/../public/index.php';
