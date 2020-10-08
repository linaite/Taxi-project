<?php

namespace App\Controllers;

use App\Abstracts\Controller;
use App\App;
use App\Views\Forms\FeedbackForm;
use App\Views\Tables\UsersTable;
use Core\Router;
use Core\Views\Content;

class FeedbackController extends Controller
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
        if (!App::$session->getUser()) {
            $table = new UsersTable();
            $msg = 'Click here and register!';
            $link = Router::getUrl('register');


            $content = new Content(['link' => $link, 'msg' => $msg, 'table' => $table->render('table.tpl.php')]);
            $this->page->setTitle('Feedback');
            $this->page->setContent($content->render('feedback.tpl.php'));

            return $this->page->render();
        } else {
            $table = new UsersTable();
            $form = new FeedbackForm();

            if ($form->isSubmitted()) {
                if ($form->validate()) {
                    $submitted_comment = $form->getSubmitData()['Comment'];

                    $user = App::$db->getRowsWhere('users', ['email' => App::$session->getUser()['email']]);

                    foreach ($user as $user_key => $user_value) {
                        $user_id = $user_key;
                    }

                    date_default_timezone_set("Europe/Vilnius");
                    App::$db->insertRow('data', ['userid' => $user_id, 'date' => date('Y-m-d H:i:s'), 'comment' => $submitted_comment]);
                }
            }

            $content = new Content(['form' => $form->render(), 'table' => $table->render('table.tpl.php')]);
            $this->page->setTitle('Feedback');
            $this->page->setContent($content->render('feedback_loggedin.tpl.php'));

            return $this->page->render();
        }
    }
}
