<?php


use Core\Config\Config;
use Jenssegers\Blade\Blade;


function dd($var)
{
    echo "<pre>";
    print_r($var);
    exit();
}


function config($name)
{
    $ww = explode('.', $name);
    return require __DIR__ . '/' . $ww[0] . '.php';
}

function view($template, $args = array())
{
    $template = str_replace('.', '/', $template);

    $view = Config::get('app.BASE_DIR') . '/resources/views/';
    $cache = Config::get('app.BASE_DIR') . '/storage/views/';
    $blade = new Blade($view, $cache);
    $file = Config::get('app.BASE_DIR') . '/resources/views/' . $template . '.blade.php';
    if (file_exists($file)) {
        echo $blade->render($template, $args);
    } else {
        echo "view not found";
    }
}

function generateToken()
{
    return bin2hex(openssl_random_pseudo_bytes(32));
}


function old($name)
{
    if (isset($_SESSION['temporary_old'][$name])) {
        return $_SESSION['temporary_old'][$name];
    } else {
        return null;
    }
}

function flash($name, $message = null)
{
    if (empty($message)) {
        if (isset($_SESSION['temporary_flash'][$name])) {
            $temporary = $_SESSION['temporary_flash'][$name];
            unset($_SESSION['temporary_flash'][$name]);
            return $temporary;
        } else {
            return false;
        }
    } else {
        $_SESSION["flash"][$name] = $message;
    }
}

function flashExists($name): bool
{
    return isset($_SESSION['temporary_flash'][$name]) === true;
}

function allFlashes()
{
    if (isset($_SESSION['temporary_flash'])) {
        $temporary = $_SESSION['temporary_flash'];
        unset($_SESSION['temporary_flash']);
        return $temporary;
    } else {
        return false;
    }
}


/**
 * show error
 * @param $name
 * @param null $message
 * @return false|mixed
 */

function error($name, $message = null)
{
    if (empty($message)) {
        if (isset($_SESSION['temporary_error'][$name])) {
            $temporary = $_SESSION['temporary_error'][$name];
            unset($_SESSION['temporary_error'][$name]);
            return $temporary;
        } else {
            return false;
        }
    } else {
        $_SESSION["error"][$name] = $message;
    }
}

/**
 * return true if error exists
 * @param $name
 * @return bool
 */

function errorExists($name): bool
{
    return isset($_SESSION['temporary_error'][$name]) === true;
}

/**
 * return all error
 * @return false|mixed
 */

function allErrors()
{
    if (isset($_SESSION['temporary_error'])) {
        $temporary = $_SESSION['temporary_error'];
        unset($_SESSION['temporary_error']);
        return $temporary;
    } else {
        return false;
    }
}

function currentDomain(): string
{
    $httpProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";

    $currentUrl = $_SERVER['HTTP_HOST'];

    return $httpProtocol . $currentUrl;

}

function redirect($url)
{
    $url = trim($url, '/ ');
    $url = strpos($url, currentDomain()) === 0 ? $url : currentDomain() . '/' . $url;

    header("Location: " . $url);
    exit();

}

function back()
{
    $http_referer = $_SERVER['HTTP_REFERER'] ?? null;

    redirect($http_referer);
}

function asset($src): string
{
    return currentDomain() . "/" . (trim($src, '/ '));
}

function url($src): string
{
    return currentDomain() . ("/" . trim($src, '/ '));
}

function findRouteByNmae($name)
{
    global $routes;

    $allRoutes = array_merge($routes['get'], $routes['post'], $routes['put'], $routes['delete']);

    $route = null;
    foreach ($allRoutes as $element) {
        if ($element['name'] == $name && $element['name'] !== null) {
            $route = $element['url'];
            break;
        }
    }

    return $route;
}


function route($name, $params = array())
{
    if (!is_array($params)) {
        throw new Exception('route prams must be array');
    }

    $route = findRouteByNmae($name);

    if ($route === null) {
        throw new Exception('route not found');
    }

    $params = array_reverse($params);
    $routeParamsMatch = array();

    preg_match_all("/{[^}.]*}/", $route, $routeParamsMatch);

    if (count($routeParamsMatch[0]) > count($params)) {
        throw new Exception('route params not enough!!');
    }

    foreach ($routeParamsMatch[0] as $key => $routeMatch) {
        $route = str_replace($routeMatch, array_pop($params), $route);
    }

    return currentDomain() . "/" . trim($route, ' /');


}

function methodField()
{
    $method_field = strtolower($_SERVER['REQUEST_METHOD']);

    if ($method_field == 'post') {
        if (isset($_POST['_method'])) {
            if ($_POST['_method'] == 'put') {
                $method_field = 'put';
            } elseif ($_POST['_method'] == 'delete') {
                $method_field = 'delete';
            }
        }
    }

    return $method_field;
}

function array_dot($array, $return_array = array(), $return_key = '')
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $return_array = array_merge($return_array, array_dot($value, $return_array, $return_key . $key . '.'));
        } else {
            $return_array[$return_key . $key] = $value;
        }
    }

    return $return_array;
}

function currentUrl()
{
    return currentDomain() . $_SERVER['REQUEST_URI'];
}

function errorClass($name)
{
    return errorExists($name);
}

function errorText($name)
{
    return errorExists($name) ? error($name) : '';
}




