<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'bootstrap' => ['debug'],
    'modules' => [
        'debug' => [
            'class'=>'yii\debug\Module',
            'allowedIPs' => [ '82.228.251.16'] // adjust this to your needs
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['82.228.251.16'] // adjust this to your needs
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\ApcCache',
        ],

        'errorHandler' => [
            'errorAction' => 'site/error'
        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['trace', 'info'],
                    'categories' => ['yii\*'],
                ],
                [
                    'class' => 'yii\log\EmailTarget',
                    'levels' => ['error','warning'],
                    'message' => [
                        'to' => ['admin@neowutran.net'],
                        'subject' => 'neowutran log error',
                    ],
                ],
                [
                    'class'=>'yii\log\DbTarget',
                    'levels'=>['error'],
                    'logTable'=>'Logs',
                ]
            ],
        ],


//        'urlManager' => [
         //   'enablePrettyUrl' => true,
  //          'showScriptName' => false,
    //        'enableStrictParsing' => false,
      ///      'suffix' => '.sms',
       //     'rules' => [

       //     ],
       // ],

        'request'         => [
            'enableCsrfValidation'   => true,
            'enableCookieValidation' => true,
        ],
    ],
];
