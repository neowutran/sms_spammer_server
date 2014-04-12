<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-api',
	'basePath' => dirname(__DIR__),
	'preload' => ['log'],
	'controllerNamespace' => 'api\controllers',
	'modules' => [],
	'components' => [
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
        'assetManager' => [
            'linkAssets' => true,
        //    'basePath' => PROJECT_STATIC_ROOT."backend/assets",
         //   'baseUrl' => PROJECT_STATIC_URL.'backend/assets',
        ],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],

    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => true,
        'rules' => [
            ['class' => 'yii\rest\UrlRule', 'controller' => 'sms'],
        ],
    ],

    'params' => $params,
];
