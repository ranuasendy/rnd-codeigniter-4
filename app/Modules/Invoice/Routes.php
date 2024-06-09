<?php

$routes->group('invoice', ['namespace' => 'App\Modules\Invoice\Controllers'], function ($routes) {
	$routes->get('/', 'Invoice::index');
});