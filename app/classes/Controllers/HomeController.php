<?php

namespace App\Controllers;

use App\Views\Pages\BasePage;
use Core\Views\Content;

class HomeController extends \App\Abstracts\Controller
{

    function index(): ?string
    {
        $content = new Content();
        $new_page = new BasePage();
        $new_page->setContent($content->render('index.tpl.php'));

       return print $new_page->render();
    }
}