<?php

$router = service('router');
$module = $router->controllerName();
$routes->get('/', '\App\Modules\\' . $module . '\Controllers\\' . $module . '::index');

// $dir =  scandir('app/Modules/');
// foreach ($dir as $module) {
// 	if ($module == '.' || $module == '..') {
// 		continue;
// 	}
	
// 	$file = scandir('app/Modules/' . $module);
// 	if (in_array('Routes.php', $file)) {
// 		include 'app/Modules/' . $module . '/Routes.php';
// 	}
// }

$routes->group('home', ['namespace' => 'App\Modules\Home\Controllers'], function ($routes) {
	$routes->get('/', 'Home::index');
});