<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class CategoryService
{
    private $idCategorie;
    private $nameCategorie;


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

    public  function create(array $formData, array $FILES)
    {
        $orig_file = $FILES["ImgCategory"]["tmp_name"];
        $ext = $FILES["ImgCategory"]["name"];

        $target_dir = __DIR__ . "./../../../public/assets/images/";
        $destination = "$target_dir$ext";
        $destinationImg = "/assets/images/" . $ext;


        move_uploaded_file($orig_file, $destination);
        $categoryN = $formData["Category"];
        $DescCategory = $formData["DbCategory"];

        $this->db->query("INSERT INTO  category (categoryName,categoryImg , categoryDesc) VALUES (:categoryName , :imgC , :DescC)", [":categoryName" => $categoryN, ":imgC" => $destinationImg, ":DescC" => $DescCategory]);
    }
    public  function feachAllCategory()
    {
        $categoriesData = $this->db->query("SELECT * FROM  category")->findAll();
        $categories = [];

        foreach ($categoriesData as $categoryData) {

            self::__set('idCategorie', $categoryData['categoryId']);
            self::__set('nameCategorie', $categoryData['categoryName']);

            $categories[] = [
                'idCategorie' => self::__get('idCategorie'),
                'nameCategorie' => self::__get('nameCategorie'),
            ];
        }

        return $categoriesData;
    }
    public  function delete($idCat)
    {


        $this->db->query("DELETE FROM category WHERE categoryId = :id", [":id" => $idCat]);
    }
    public  function getbyId($idCat)
    {


        return   $this->db->query("SELECT * FROM category WHERE categoryId = :id", [":id" => $idCat])->find();
    }

    public function getCategorybyName($search)
    {

        return  $this->db->query("SELECT * FROM category WHERE categoryName LIKE :categoryName", [":categoryName" => "%$search%"])->findAll();
    }
    public function update(array $formData, array $FILES, $idCategory)
    {
        $orig_file = $FILES["ImgCategoryE"]["tmp_name"];
        $ext = $FILES["ImgCategoryE"]["name"];

        $target_dir = __DIR__ . "./../../../public/assets/images/";
        $destination = "$target_dir$ext";
        $destinationImg = "/assets/images/" . $ext;


        move_uploaded_file($orig_file, $destination);


        $categoryName = $formData["CategoryE"];
        $categoryDesc = $formData["DbCategoryE"];

        $this->db->query(
            "UPDATE category SET categoryName = :categoryName, categoryImg = :imgC, categoryDesc = :DescC WHERE categoryId = :id",
            [
                ":categoryName" => $categoryName,
                ":imgC" => $destinationImg,
                ":DescC" => $categoryDesc,
                ":id" => $idCategory
            ]
        );
    }
}
