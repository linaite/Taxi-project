<?php

use App\Views\Pages\BasePage;

require('../bootloader.php');

$content = new \Core\Views\Content();
$new_page = new BasePage();
$new_page->setContent($content->render('test.tpl.php'));

print $new_page->render();

