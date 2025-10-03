<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}




spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

// require_once __DIR__ . '/../src/Router.php';
// require_once __DIR__ . '/../src/DB.php';

require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if ($match) {
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    } else if(is_array($match['action'])){
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
    
} else {
    http_response_code(404);
    echo '<img src="https://http.cat/404"></img>';
}
