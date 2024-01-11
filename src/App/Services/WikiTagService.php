<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class WikiTagService
{



    public function __construct(private Database $db)
    {
    }


    public  function create(array $formData,  $idwiki)
    {
        $tagsId = $formData["tags"];
        foreach ($tagsId as $tag) {


            $this->db->query("INSERT INTO wikitag(wikiId, tagId) VALUES (:wikiId,:tagId)", [":wikiId" => $idwiki, ":tagId" => $tag]);
        }
    }
}