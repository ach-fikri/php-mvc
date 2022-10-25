<?php

namespace AchFikri\Belajar\PHP\MVC\Controller;
use AchFikri\Belajar\PHP\MVC\App\View;

class HomeController
{
    public function index():void
    {
        $model = [
          "title"=>"Belajar PHP MVC",
            "content" => "selamat belajar php mvc"
        ];
  View::render('Home/index', $model);

    }
    public function hello():void
    {
        echo "HomeController.hello()";
    }
    public function world():void
    {
        echo "HomeController.world()";
    }



}