<?php
/**
 * This is the bootstrap file for the production environment.
 */

$yii = __DIR__ . '/../vendor/yiisoft/yii/framework/yii.php';
$global = __DIR__ . '/../app/helpers/global.php';
$builder = __DIR__ . '/../vendor/crisu83/yii-configbuilder/helpers/EnvConfigBuilder.php';

require_once($yii);
require_once($global);
require_once($builder);

$config = EnvConfigBuilder::build(array(
	__DIR__ . '/../app/config/main.php',
	__DIR__ . '/../app/config/web.php',
), __DIR__ . '/../app/config/environments');

Yii::createWebApplication($config)->run();
