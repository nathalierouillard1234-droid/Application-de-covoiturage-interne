$routes = [
    '/' => ['HomeController', 'index'],
    '/login' => ['AuthController', 'login'],
    '/loginPost' => ['AuthController', 'loginPost'],
    '/logout' => ['AuthController', 'logout'],

    '/trajet/create' => ['TrajetController', 'create'],
    '/trajet/store' => ['TrajetController', 'store'],
    '/trajet/delete' => ['TrajetController', 'delete'],

    '/admin' => ['AdminController', 'dashboard'],
];