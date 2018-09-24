<?php

define('ROOT_DIR', dirname(dirname(dirname(__FILE__))) . '/');


spl_autoload_register(function($className) {
  $file = ROOT_DIR .'app/'. ($className) . '.php';
  $file = str_replace('\\', '/', $file);
  require_once $file;
});


require ROOT_DIR . 'app/Core/functions/util.php';

require ROOT_DIR . 'app/Core/constants.php';

if(MODE === 'PRODUCTION') error_reporting(0);



Core\Support\Session::start();

Core\Middleware\CSRFMiddleware::init();

Core\Middleware\AuthMiddleware::init();


require ROOT_DIR . 'app/Core/Router/Route.php';

require ROOT_DIR . 'routes/public-URIs.php';

require ROOT_DIR . 'app/Core/Router/base-routes.php';

require ROOT_DIR . 'routes/web.php';

require ROOT_DIR . 'routes/api.php';

Route::middleware(function($request, $response) {
  $response->back();
});

