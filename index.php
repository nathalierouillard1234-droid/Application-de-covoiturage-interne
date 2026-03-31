session_start();

require '../config/config.php';
require '../routes/web.php';

$url = $_GET['url'] ?? '/';

if (array_key_exists($url, $routes)) {
    $controllerName = $routes[$url][0];
    $method = $routes[$url][1];

    require "../app/controllers/$controllerName.php";
    $controller = new $controllerName();
    $controller->$method();
} else {
    echo "404";
}