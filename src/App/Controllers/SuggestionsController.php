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

        $wikis = $this->wiki->getWikisbyTitle($search);
        $categories = $this->categorie->getCategorybyName($search);
        $tags = $this->tag->getTagsbyName($search);

        echo $this->view->render("/components/suggestions.php", ["wikis" => $wikis, "categories" => $categories, "tags" => $tags]);
    }
}
