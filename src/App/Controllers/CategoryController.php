<?php

declare(strict_types=1);


namespace  App\Controllers;

use App\Services\CategoryService;
use Framework\TemplateEngine;

class CategoryController
{
    public function __construct(private TemplateEngine $view, private CategoryService $category)
    {
    }

    public function index()
    {
        $categories = $this->category->feachAllCategory();
        echo  $this->view->render("category.php", ["categories" => $categories]);
    }

    public function  addCategory()
    {
        $this->category->create($_POST);
        redirectTo($_SERVER['HTTP_REFERER']);
    }
    public function  DeleteCategory(array $param)
    {
        $idCategory = $param["categoryId"];
        $this->category->delete($idCategory);
        redirectTo("/category");
    }
    public function  getCategory(array $param)

    {
        header('Content-Type: application/json');
        $idCategory = $param["categoryId"];
        $response = $this->category->getbyId($idCategory);
        echo json_encode($response);
    }
    public function  updateCategory(array $param)

    {
        header('Content-Type: application/json');

        echo json_encode(["fk" => "kld"]);
    }
}
