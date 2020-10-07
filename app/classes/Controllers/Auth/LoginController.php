<?php

namespace App\Controllers\Auth;

use App\App;
use Core\Router;
use Core\Views\Content;

class LoginController extends \App\Abstracts\Controller
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
        $form = new \App\Views\Forms\LoginForm();

        if ($form->isSubmitted()) {
            if ($form->validate()) {
                $form_values = $form->getSubmitData();
                App::$session->login($form_values['email'], $form_values['password']);
                header('Location:' . Router::getUrl('index'));
                exit;
            }
        }

        $content = new Content(['form' => $form->render()]);

        $this->page->setTitle('Login');
        $this->page->setContent($content->render('form.tpl.php'));
        return $this->page->render();
    }
}