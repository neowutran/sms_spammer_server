<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
	die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require_once(__DIR__ . '/../../ini_file.php');
require(__DIR__ . '/../../protected/vendor/autoload.php');
require(__DIR__ . '/../../protected/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../protected/common/config/aliases.php');

$config = require(__DIR__ . '/../../protected/backend/tests/acceptance/_config.php');

(new yii\web\Application($config))->run();