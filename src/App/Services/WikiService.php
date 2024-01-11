<?php


declare(strict_types=1);



namespace App\Services;

use Framework\Database;

class WikiService
{
    public function __construct(private  Database $db)
    {
    }


    public function create(array $formData, array $FILES, $idC)
    {

        $orig_file = $FILES["imageWiki"]["tmp_name"];
        $ext = $FILES["imageWiki"]["name"];

        $target_dir = __DIR__ . "./../../../public/assets/images/";
        $destination = "$target_dir$ext";
        $destinationImg = "/assets/images/" . $ext;


        move_uploaded_file($orig_file, $destination);
        $title = $formData["Tilte"];
        $content = $formData["Content"];
        $this->db->query("INSERT INTO wiki ( title, content, authorId, categoryId,imageWiki) VALUES (:title , :content , :authorId,:categoryId,:imageWiki)", [":title" => $title, ":content" => $content, ":authorId" => 1, ":categoryId" => $idC, ":imageWiki" => $destinationImg]);

        return  $this->db->id();
    }
    public function featchAllWikis()
    {

        return $this->db->query("SELECT * FROM wiki")->findAll();
    }
    public function getWikiByIdW($idW)
    {

        return $this->db->query("SELECT * FROM wiki where wikiId = :idW", [":idW" => $idW])->find();
    }
    public function getWikiByIdC($idC)
    {

        return $this->db->query("SELECT * FROM wiki where categoryId = :id and isArchived = 0 ", [':id' => $idC])->findAll();
    }
    public function delete($idW)
    {

        $this->db->query("DELETE FROM wiki WHERE wikiId = :id", [":id" => $idW]);
    }
}
