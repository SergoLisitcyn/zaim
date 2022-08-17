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
    'language' => 'kk-KZ',
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
                'sitemap.xml' => '/sitemap/index',
                'valuta-bagamy' => '/site/currency',
                'aktsii' => '/sale/index',
                'aktsii/arhiv' => '/sale/arhiv',
                'articles' => '/articles/index',
                'news' => '/news/index',
                'kreditnyj-kalkulyator' => '/site/calculator',
                'rating' => '/site/rating',
                'unisender' => '/site/unisender',
                'unisender_mfo' => '/mfo/unisender',
                'banks' => '/banks/index',
                'mfo-new' => '/mfo-new/index',
                'reestr-mfo' => '/mfo/reestr-mfo',
                [
                    'pattern' => 'mfo/reestr-mfo-city/<url:\S+>',
                    'route' => '/mfo/reestr-mfo-city',
                    'defaults' => ['url' => '']
                ],
//                [
//                    'pattern' => 'mfo/<url:\S+>/login',
//                    'route' => '/mfo/login',
//                    'defaults' => ['url' => '']
//                ],
//                [
//                    'pattern' => 'mfo/<url:\S+>',
//                    'route' => '/mfo/view',
//                    'defaults' => ['url' => '']
//                ],
                [
                    'pattern' => 'banks/<url:\S+>/requisites',
                    'route' => '/banks/requisites',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'banks/<url:\S+>/finance',
                    'route' => '/banks/finance',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'banks/<url:\S+>/contacts',
                    'route' => '/banks/contacts',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'banks/<url:\S+>/reviews',
                    'route' => '/banks/reviews',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'banks/<url:\S+>',
                    'route' => '/banks/view',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'mfo/filter/<index>/<filter>',
                    'route' => '/mfo-new/filter',
                    'defaults' => [
                        'index' => '',
                        'filter' => ''
                    ]
                ],
                [
                    'pattern' => 'mfo/<url:\S+>/login',
                    'route' => '/mfo-new/login',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'mfo/<url:\S+>/clients',
                    'route' => '/mfo-new/clients',
                    'defaults' => ['url' => '']
                ],
//                [
//                    'pattern' => 'mfo/<url:\S+>/contacts',
//                    'route' => '/mfo-new/contacts',
//                    'defaults' => ['url' => '']
//                ],
                [
                    'pattern' => 'mfo/<url:\S+>/reviews',
                    'route' => '/mfo-new/reviews',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'mfo/<url:\S+>',
                    'route' => '/mfo-new/view',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'aktsii/<url:\S+>',
                    'route' => '/sale/list',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'articles/<url:\S+>',
                    'route' => '/articles/view',
                    'defaults' => ['url' => '']
                ],
                [
                    'pattern' => 'news/<url:\S+>',
                    'route' => '/news/view',
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
