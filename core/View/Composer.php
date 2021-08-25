<?php

namespace Core\View;

use Core\Config\Config;
use Jenssegers\Blade\Blade;

class Composer
{
    private static $instance;
    private $vars = [];

    private function __construct()
    {

    }

    private function registerView($name, $callback)
    {
        $viewVars = $callback();

        foreach ($viewVars as $key => $value) {
            $this->vars[$key] = $value;
        }


        $template = str_replace('.', '/', $name);

        $view = Config::get('app.BASE_DIR') . '/resources/views/';
        $cache = Config::get('app.BASE_DIR') . '/storage/views/';
        $blade = new Blade($view, $cache);
        $file = Config::get('app.BASE_DIR') . '/resources/views/' . $template . '.blade.php';
        if (file_exists($file)) {
//var_dump($this->vars);exit();
            echo $blade->render($template, $this->vars);
        } else {
            echo "view not found";
        }
    }


    public static function __callStatic($name, $arguments)
    {
        $instance = self::getInstance();
        switch ($name) {
            case "view":
                return call_user_func_array(array($instance, "registerView"), $arguments);
                break;
        }
    }

    private static function getInstance()
    {
        if (empty(self::$instance))
            self::$instance = new self;
        return self::$instance;
    }
}