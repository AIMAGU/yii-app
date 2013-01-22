<?php

// application parameters
return array(
	'app.name' => 'Application',
	// database configurations
	'db.name' => '',
	'db.connectionString' => 'mysql:host=localhost;dbname=yii_app',
	'db.username' => 'root',
	'db.password' => '',
	// url rules
	'urlManager.rules' => array(
		// language rules
		'<lang:([a-z]{2}(?:_[a-z]{2})?)>/<route:[\w\/]+>'=>'<route>',
		// seo rules
		'<controller:\w+>/<name>-<id:\d+>.html'=>'<controller>/view',
		// default rules
		'<controller:\w+>/<id:\d+>' => '<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
		'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
	),
	// less compiler configurations
	'less.mode' => 'client',
	'less.options' => array(
		'env' => 'development',
		'watch' => true,
	),
	'less.files' => array(
		'less/styles.less' => 'css/styles.css',
	),
	'image.versions' => array(
	),
	// this is used in contact page
	'adminEmail' => 'webmaster@example.com',
);