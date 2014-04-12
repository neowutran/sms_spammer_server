<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
        'assetManager' => [
            'linkAssets' => true,
           // 'basePath' => PROJECT_STATIC_ROOT."frontend/assets",
           // 'baseUrl' => PROJECT_STATIC_URL.'frontend/assets',
        ],
        /*
        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@webroot/themes/neowutran'],
                'baseUrl' => '@web/themes/basic',
                'basePath' => ''
            ],
        ],
        */

    ],

	'params' => $params,
];
