<?php

declare(strict_types=1);


namespace  App\Controllers;

use App\Services\CategoryService;
use App\Services\TagService;
use App\Services\WikiService;
use Framework\TemplateEngine;
use App\Controllers\WikiTagController;
use App\Services\WikiTagService;

class WikiController
{
    public function __construct(private TemplateEngine $view, private WikiService $wiki, private CategoryService $category, private TagService $tags, private WikiTagService $wikiTag)
    {
    }
    public function index(array $params)
    {
        $categoryId = $params["categoryId"];
        $wikis = $this->wiki->getWikiByIdC($categoryId);
        $categorie = $this->category->getbyId($categoryId);
        $tags = $this->tags->feachAllTags();
        echo $this->view->render("/wiki.php", ["wikis" => $wikis, "categorie" => $categorie, "tags" => $tags]);
    }
    public function addWiki(array $params)
    {

        $categoryId = (int) $params["categoryId"];


        $idwiki = $this->wiki->create($_POST, $_FILES, $categoryId);


        $this->wikiTag->create($_POST, $idwiki);
    }
    public function deleteWiki(array $params)
    {

        $wikiId = (int) $params["wikiId"];


        $this->wiki->delete($wikiId);
        redirectTo($_SERVER['HTTP_REFERER']);
    }
    public function edit(array $param)
    {

        header('Content-Type: application/json');
        $idwiki = $param["wikiId"];

        $response = $this->wiki->getWikiByIdW($idwiki);
        echo json_encode($response);
    }
}
