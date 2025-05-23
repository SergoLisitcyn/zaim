<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/media.css',
        'css/fonts.css',
    ];
    public $js = [
        'libs/autoptimize/lazysizes.min.js',
        'libs/bj-lazy-load/bj-lazy-load.min.js',
        'libs/smooth-scroll-up/jquery.scrollUp.min.js',
        'libs/uncode/common.js',
        'libs/jquery.maskedinput.min.js',
        'libs/loan_calculator.js',
        'libs/rangeslider/rangeslider.min.js',
        'libs/bs-util-collapse-v4.5.0.min.js',
        'js/common.js?v=1',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
