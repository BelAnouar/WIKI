<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\CategoryService;
use App\Services\TagService;
use App\Services\WikiService;
use Framework\TemplateEngine;


class SuggestionsController
{



    public function __construct(private TemplateEngine $view, private TagService $tag, private CategoryService $categorie, private WikiService $wiki)
    {
    }
    public function index()
    {

        $search = $_GET["search"];
        echo $this->view->render("/components/suggestions.php");
    }
}
