<?php

$routes->group('home', ['namespace' => '\Modules\Home\Controllers'], function ($routes) {
	$routes->get('/', 'Home::index');
});