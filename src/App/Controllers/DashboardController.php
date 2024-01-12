<?php

declare(strict_types=1);


namespace  App\Controllers;

use App\Services\CategoryService;
use App\Services\UserService;
use App\Services\WikiService;
use Framework\TemplateEngine;

class DashboardController
{
    public function __construct(private TemplateEngine $view, private UserService $user, private CategoryService $category, private WikiService $wiki)
    {
    }

    public function index()
    {

        $Authors = $this->user->countAuthor();
        $category = $this->category->countCategory();
        $wiki = $this->wiki->countWiki();
        $archived = $this->wiki->countArchivedWiki();
        $Author = $this->user->getAllAuthor();


        echo $this->view->render("dashboard.php",    [
            'Authors' => $Authors,
            'category' => $category,
            'wiki' => $wiki,
            'archived' => $archived, "Author" => $Author
        ]);
    }
}
