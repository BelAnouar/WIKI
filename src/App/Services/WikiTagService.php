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
    public  function getWikiTagByidW($idwiki)
    {


        return   $this->db->query("SELECT `tagName` 
        FROM `tag` 
        WHERE `tagId` IN (
            SELECT DISTINCT `tagId` 
            FROM `wikitag` 
            WHERE `wikiId` = :wikiId
        )", [":wikiId" => $idwiki])->findAll();
    }


    public function getCountTag($idwiki, $idtag)
    {
        $query = "SELECT COUNT(*) as count FROM `wikitag` WHERE `wikiId` = :wikiId AND `tagId` = :tagId";

        $result = $this->db->query($query, [":wikiId" => $idwiki, ":tagId" => $idtag])->count();


        return $result;
    }

    public function delete($idwiki, $idtags)
    {
        $tagIdsString = implode(',', $idtags);
        $this->db->query("DELETE FROM `wikitag` WHERE `wikiId` = :wikiId and `tagId` not IN (:tagId)", [":wikiId" => $idwiki, ":tagId" => $tagIdsString]);
    }
    public  function update(array $formData,  $idwiki)
    {
        $tagsId = $formData["tags"];

        $this->delete($idwiki, $tagsId);

        foreach ($tagsId as $tag) {
            $countTag = $this->getCountTag($idwiki, $tag);

            if ($countTag == 0) {

                $this->db->query("INSERT INTO wikitag (wikiId, tagId) VALUES (:wikiId,:tagId)", [":wikiId" => $idwiki, ":tagId" => $tag]);
            }
        }
    }
}
