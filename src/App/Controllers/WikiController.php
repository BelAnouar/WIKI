<?php

declare(strict_types=1);


namespace  App\Controllers;

use App\Services\CategoryService;
use Framework\TemplateEngine;

class WikiController
{
    public function __construct(private TemplateEngine $view, private CategoryService $category)
    {
    }
    public function index(array $params)
    {
        dd($params);
    }
}
