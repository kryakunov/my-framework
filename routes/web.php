<?php

use App\Controllers\HomeController;
use Somecode\Framework\Routing\Route;

return [
    Route::get('/', [HomeController::class, 'index'])
];