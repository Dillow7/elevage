<?php

use app\controllers\ApiExampleController;
use app\controllers\LoginController;
use app\controllers\HomeController;
use app\controllers\IndexController;
use flight\Engine;
use flight\net\Router;
// use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/




$LoginController = new LoginController();
$HomeController = new HomeController();
$router->get('/', [ $HomeController, 'home' ]);
$router->get('/login', [ $LoginController, 'showLoginForm' ]); 
$router->post('/login', [ $LoginController, 'processLogin' ]);

$router->get('/hello-world/@name', function($name) {
	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
});

$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});