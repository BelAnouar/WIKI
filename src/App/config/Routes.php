<?php


declare(strict_types=1);


namespace App\Config;

use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\CategoryController;
use App\Controllers\DashboardController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);

    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/login', [AuthController::class, 'loginPage']);
    $app->post('/login', [AuthController::class, 'login']);
    // $app->get('/user/{iduder}', [AuthController::class, '']);
    $app->get('/dashboard', [DashboardController::class, 'index']);
    // Category
    $app->get('/category', [CategoryController::class, 'index']);
    $app->get('/category/{categoryId}', [CategoryController::class, 'getCategory']);
    $app->post('/category', [CategoryController::class, 'addCategory']);
    $app->delete('/category/{categoryId}', [CategoryController::class, 'DeleteCategory']);
}
