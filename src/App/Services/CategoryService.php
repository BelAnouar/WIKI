<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class CategoryService
{



    public function __construct(private Database $db)
    {
    }

    public  function create(array $formData)
    {
        $categoryN = $formData["Category"];

        $this->db->query("INSERT INTO  category (categoryName) VALUES (:categoryName)", [":categoryName" => $categoryN]);
    }
    public  function feachAllCategory()
    {


        return  $this->db->query("SELECT * FROM  category")->findAll();
    }
    public  function delete($idCat)
    {


        $this->db->query("DELETE FROM category WHERE categoryId = :id", [":id" => $idCat]);
    }
    public  function getbyId($idCat)
    {


        return   $this->db->query("SELECT * FROM category WHERE categoryId = :id", [":id" => $idCat])->find();
    }
}
