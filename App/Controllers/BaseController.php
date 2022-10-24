<?php

namespace App\Controllers;

class BaseController
{
    public static function render($view, $data = [])
    {
        $header = __DIR__ . '/../Views/header.php';
        $view = __DIR__ . '/../Views/' . $view . '.php';
        $footer = __DIR__ . '/../Views/footer.php';
        extract($data);

        ob_start();
        include $header;
        include $view;
        include $footer;
        echo ob_get_clean();
        die;
    }
}