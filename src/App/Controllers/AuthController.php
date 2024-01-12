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
        $this->userService->isEmailTaken($_POST['email']);


        $this->userService->create($_POST);
        redirectTo($_SERVER['HTTP_REFERER']);
    }
    public function  loginPage()
    {
        echo  $this->view->render("login.php");
    }
    public function  login()
    {
        $role = $this->userService->AuthUser($_POST);

        if ($role === "Author") {
            redirectTo("/");
        } else {
            redirectTo("/dashboard");
        }
    }
}
