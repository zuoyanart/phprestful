<?php
	require 'vendor/autoload.php';

	$app = new Slim\App();

	const v1 = "/v1";//api 版本号

	//user
	$app->get(v1 . '/user/{name}', 'controller\Test:test1');


	$app->run();
?>
