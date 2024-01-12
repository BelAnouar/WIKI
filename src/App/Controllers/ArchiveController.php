<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\WikiService;
use Framework\TemplateEngine;


class ArchiveController
{
    public function __construct(
        private TemplateEngine $view,

        private  WikiService $wiki
    ) {
    }

    public function index()
    {
        $wikis = $this->wiki->featchAllWikis();
        echo $this->view->render("archive.php", ["wikis" => $wikis]);
    }
    public function archive(array $pramas)
    {
        $wikiId = $pramas['wikiId'];
        $this->wiki->updateArchivedStatus($wikiId, 1);
    }

    public function inarchive(array $pramas)
    {
        $wikiId = $pramas['wikiId'];
        $this->wiki->updateArchivedStatus($wikiId, 0);
    }
}
