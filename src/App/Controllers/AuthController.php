<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};

class AuthController
{
    public function __construct(
        private TemplateEngine $view,

        private UserService $userService
    ) {
    }

    public function index()
    {
        echo $this->view->render("register.php");
    }

    public function register()
    {
    }
    public function  loginPage()
    {
        echo  $this->view->render("login.php");
    }
}
