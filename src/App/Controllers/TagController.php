<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\TagService;
use Framework\TemplateEngine;


class TagController
{



    public function __construct(private TemplateEngine $view, private TagService $tag)
    {
    }
    public function index()
    {
        $tags = $this->tag->feachAllTags();
        echo $this->view->render("/tags.php", ["tags" => $tags]);
    }

    public function addTag()
    {
        $this->tag->create($_POST);
    }
    public function deleteTag(array $params)
    {
        $idTag = $params["tagid"];
        $this->tag->delete($idTag);
        redirectTo("/tag");
    }
    public function gettag(array $params)
    {
        header('Content-Type: application/json');
        $idTag = $params["tagid"];
        $response =   $this->tag->getbyId($idTag);
        echo json_encode($response);
    }
    public function updateTAg(array $params)
    {
        $idTag = $params["tagid"];
        $this->tag->update($_POST, $idTag);
        redirectTo("/tag");
    }
}
