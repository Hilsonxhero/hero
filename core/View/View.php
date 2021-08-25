<?php

namespace Core\View;


use Jenssegers\Blade\Blade;

class View
{
    public static function render($view, $args)
    {
        echo static::renderTemplate($view, $args);
    }

//    public static function renderTemplate($template, $args)
//    {
//        $view = BASE_DIR . '/resources/views/';
//        $cache = BASE_DIR . '/storage/views/';
//        $blade = new Blade($view, $cache);
//        $file = BASE_DIR . '/resources/views/' . $template . '.blade.php';
//        if (file_exists($file)) {
//            return $blade->render($template, $args);
//        } else {
//            echo "dfdfd";
//        }
//    }
}