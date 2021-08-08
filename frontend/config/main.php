<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'baseUrl' => '',
//            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'login' => '/site/login',
                'contact' => '/site/contact',
                'faq' => '/site/faq',
                '/' => '/site/index',
                'aktsii' => '/sale/index',
                'arhiv' => '/sale/arhiv',
                'kreditnyj-kalkulyator' => '/site/calculator',
                'rating' => '/site/rating',
                [
                    'pattern' => 'mfo/<url:\S+>/reviews',
                    'route' => '/mfo/reviews',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'mfo/<url:\S+>/login',
                    'route' => '/mfo/login',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'mfo/<url:\S+>',
                    'route' => '/mfo/view',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'aktsii/<url:\S+>',
                    'route' => '/sale/list',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'page/<slug:\S+>',
                    'route' => '/pages/show-page',
                    'defaults' => ['slug' => 'error']
                ],
                [
                    'pattern' => '/<slug:\S+>',
                    'route' => '/site/filter',
                    'defaults' => ['slug' => 'error']
                ],

            ],
        ],
    ],
    'params' => $params,
];
