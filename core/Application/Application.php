<?php

namespace Core\Application;

class Application
{
    public function __construct()
    {
        $this->loadHelpers();
        $this->loadProviders();
        $this->registerRoutes();
        $this->routign();
    }

    private function loadProviders()
    {
        $appConfigs = require dirname(dirname(__DIR__)) . '/config/app.php';

        $providers = $appConfigs['providers'];

        foreach ($providers as $provider) {

            $providerObject = new $provider();
            $providerObject->boot();
        }
    }

    private function loadHelpers()
    {
//        require_once dirname(dirname(__DIR__)) . '/config/helpers.php';

        if (file_exists(dirname(dirname(__DIR__)) . '/app/Http/Helpers.php')) {
            require_once(dirname(dirname(__DIR__)) . '/app/Http/Helpers.php');
        }
    }

    private function registerRoutes()
    {
        global $routes;

        $routes = [
            'get' => [], 'post' => [], 'put' => [], 'delete' => []
        ];

        require_once(dirname(dirname(__DIR__)) . '/routes/web.php');
        require_once(dirname(dirname(__DIR__)) . '/routes/api.php');
    }

    private function routign()
    {
        $routing = new \Core\Router\Routing();
        $routing->run();
    }

}