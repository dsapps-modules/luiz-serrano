<?php

require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$view = $argv[1] ?? 'mini';

if ($view === 'home') {
    $controller = new App\Http\Controllers\HomeController();
    $response = $controller();
    echo $response->render();
    exit;
}

echo app('view')->make($view)->render();
