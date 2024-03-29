<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\ArchiveController;
use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\CategoryController;
use App\Controllers\DashboardController;
use App\Controllers\SuggestionsController;
use App\Controllers\TagController;
use App\Controllers\WikiController;

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
    $app->post('/category/update/{categoryId}', [CategoryController::class, 'updateCategory']);
    //TAgs
    $app->get('/tag', [TagController::class, 'index']);
    $app->get('/tag/{tagid}', [TagController::class, 'gettag']);
    $app->post('/tag', [TagController::class, 'addTag']);
    $app->post('/tag/update/{tagid}', [TagController::class, 'updateTAg']);
    $app->delete('/tag/{tagid}', [TagController::class, 'deleteTag']);
    //categories home
    $app->get('/categories', [CategoryController::class, "cotegiesPage"]);

    // wiki
    $app->get('/Wiki/{categoryId}', [WikiController::class, "index"]);
    $app->get('/Wiki/view/{wikiId}', [WikiController::class, "WikiPage"]);
    $app->get('/Wiki/edit/{wikiId}', [WikiController::class, "edit"]);
    $app->post('/Wiki/update/{wikiId}', [WikiController::class, "update"]);
    $app->post('/Wiki/{categoryId}', [WikiController::class, "addWiki"]);
    $app->delete('/Wiki/{wikiId}', [WikiController::class, "deleteWiki"]);

    //modal

    $app->get("/suggestions", [SuggestionsController::class, "index"]);

    // ArchiveCategorie 
    $app->get("/archive", [ArchiveController::class, "index"]);
    $app->post("/archive/archived/{wikiId}", [ArchiveController::class, "archive"]);
    $app->post("/archive/inarchive/{wikiId}", [ArchiveController::class, "inarchive"]);
}
