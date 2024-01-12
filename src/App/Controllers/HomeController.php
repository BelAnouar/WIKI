<?php

declare(strict_types=1);

namespace App\Controllers;


use Framework\TemplateEngine;
use App\Config\Paths;
use App\Services\CategoryService;
use App\Services\WikiService;

class HomeController
{



  public function __construct(private TemplateEngine $view, private CategoryService $category, private WikiService $wiki)
  {
  }
  public function home()
  {
    $categories = $this->category->feachAllCategory();
    $wikis = $this->wiki->getWikis();
    echo $this->view->render("/index.php", ["categories" => $categories, "wikis" => $wikis]);
  }
}
