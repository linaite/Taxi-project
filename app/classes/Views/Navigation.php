<?php

namespace App\Views;

use App\App;
use Core\Router;
use Core\View;

class Navigation extends View
{

    public function __construct()
    {

        $nav = [
            'home' =>
                ['url' => Router::getUrl('index'), 'title' => 'Home', 'class'=>'left'],
        ];

        if (App::$session->getUser()) {
            $nav[] = ['url' => Router::getUrl('feedback'), 'title' => 'Feedback', 'class'=>'left'];
            $nav[] = ['url' => Router::getUrl('logout'), 'title' => 'Logout', 'class'=>'right'];
        } else {
            $nav[] = ['url' => Router::getUrl('feedback'), 'title' => 'Feedback', 'class'=>'left'];
            $nav[] = ['url' => Router::getUrl('register'), 'title' => 'Register', 'class'=>'right'];
            $nav[] = ['url' => Router::getUrl('login'), 'title' => 'Login', 'class'=>'right'];
        }


        parent::__construct($nav);
    }

    public function render($template_path = ROOT . '/app/templates/partials/nav.tpl.php'): string
    {
        return parent::render($template_path);
    }
}