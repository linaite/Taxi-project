<?php

namespace App\Views;

use Core\View;

class Footer extends View
{
    public function render (string $template_path): string
    {
        $template_path = ROOT . '/app/templates/partials/' . $template_path;
        return parent::render($template_path);
    }
}