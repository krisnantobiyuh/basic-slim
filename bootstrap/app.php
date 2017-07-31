<?php

require  __DIR__.  '/../vendor/autoload.php';

$app = new Slim\App([

		'settings' => [
			'displayErrorDetails' => true,

			'db' => [
				'driver' => 'mysql',
				'host' => 'db',
				'database' => 'app',
				'username' => 'root',
				'password' => 'acer',
				'charset' => 'utf8',
				'collation' => 'utf8_unicode_ci',
				'prefix' => ''
			]
		]

	]);

require  __DIR__.  '/../app/container/Container.php';
require  __DIR__.  '/../app/routes/routes.php';
