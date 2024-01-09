<?php

declare(strict_types=1);

use App\Config\Paths;
use App\Services\CategoryService;
use App\Services\UserService;
use App\Services\ValidatorService;
use Framework\Container;
use Framework\Database;
use Framework\TemplateEngine;


return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW),

    Database::class => fn () => new Database($_ENV['DB_DRIVER'], [
        'host' => $_ENV["DB_HOST"],
        'port' => $_ENV["DB_PORT"],
        'dbname' => $_ENV['DB_NAME']
    ], $_ENV['DB_USER'], $_ENV["DB_PASS"]),
    UserService::class => function (Container $container) {
        $db =  $container->get(Database::class);

        return new UserService($db);
    },
    CategoryService::class => function (Container $container) {
        $db =  $container->get(Database::class);

        return new CategoryService($db);
    }
];
