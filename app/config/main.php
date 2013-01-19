<?php

// require application params
$params = require(__DIR__ . '/params.php');

// application configuration
return array(
	'basePath' => __DIR__ . '/..',
	'name' => 'My Web Application',

	// application language
	'language' => 'en',

	// path aliases
	'aliases' => array(
		'bootstrap' => 'ext.bootstrap',
	),

	// components to preload
	'preload' => array('log'),

	// paths to import
	'import' => array(
		'application.models.*',
		'application.components.*',
	),

	// application modules
	'modules' => array(// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components' => array(
		'bootstrap' => array(
			'class' => 'bootstrap.components.Bootstrap',
		),
		'db' => array(
			'connectionString' => $params['db.connectionString'],
			'username' => $params['db.username'],
			'password' => $params['db.password'],
			'enableParamLogging' => YII_DEBUG,
			'charset' => 'utf8',
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
		'less' => array(
			'class' => 'ext.less.components.Less',
			'mode' => $params['less.mode'],
			'options' => $params['less.options'],
			'files' => $params['less.files'],
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => $params['url.rules'],
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
	),

	// application parameters
	'params' => $params,
);