<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class TagService
{



    public function __construct(private Database $db)
    {
    }
    public function __get($parametre)
    {
        return $this->$parametre;
    }
    public function __set($parametre, $value)
    {
        $this->$parametre = $value;
    }

    public  function create(array $formData)
    {
        $tagN = $formData["Tags"];

        $this->db->query("INSERT INTO tag (tagName) VALUES (:tagName)", [":tagName" => $tagN]);
    }
    public  function feachAllTags()
    {
        $categoriesData = $this->db->query("SELECT * FROM  tag")->findAll();
        // $categories = [];

        // foreach ($categoriesData as $categoryData) {

        //     self::__set('idCategorie', $categoryData['categoryId']);
        //     self::__set('nameCategorie', $categoryData['categoryName']);

        //     $categories[] = [
        //         'idCategorie' => self::__get('idCategorie'),
        //         'nameCategorie' => self::__get('nameCategorie'),
        //     ];
        // }

        return $categoriesData;
    }
    public  function delete($idTag)
    {


        $this->db->query("DELETE FROM tag WHERE tagId = :id", [":id" => $idTag]);
    }
    public  function getbyId($idTag)
    {


        return   $this->db->query("SELECT * FROM tag WHERE tagId = :id", [":id" => $idTag])->find();
    }

    public function getTagsbyName($search)
    {

        return  $this->db->query("SELECT * FROM tag WHERE tagName LIKE :tagName", [":tagName" => "%$search%"])->findAll();
    }
}
