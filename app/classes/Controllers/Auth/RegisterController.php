<?php

namespace App\Controllers\Auth;

use App\Abstracts\Controller;
use App\App;
use App\Users\User;
use Core\Router;

class RegisterController extends Controller
{

    /**
     * This method builds or sets
     * current $page content
     * renders it and returns HTML
     *
     * So if we have ex.: ProductsController,
     * it can have methods responsible for
     * index() (main page, usualy a list),
     * view() (preview single),
     * create() (form for creating),
     * edit() (form for editing)
     * delete()
     *
     * These methods can then be called on each page accordingly, ex.:
     * add.php:
     * $controller = new FeedbackController();
     * print $controller->add();
     *
     *
     * my.php:
     * $controller = new ProductsController();
     * print $controller->my();
     *
     * @return string|null
     */
    function index(): ?string
    {
        $forma = new \App\Views\Forms\RegisterForm();

        if ($forma->isSubmitted()) {
            if ($forma->validate()) {
                $user = new User($forma->getSubmitData());

                App::$db->insertRow('users', $user->_getData());
                header('Location:'. Router::getUrl('login'));
                exit;
            }
        }

        $this->page->setTitle('Register');
        $this->page->setContent($forma->render());
        return $this->page->render();
    }
}