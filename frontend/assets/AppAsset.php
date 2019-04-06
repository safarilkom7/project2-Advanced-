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
        'css/assets/font/font-awesome.min.css',
        'css/assets/font/font.css',
        'css/assets/css/bootstrap.min.css',
        'css/assets/css/style.css',
        'css/assets/css/responsive.css',
        'css/assets/css/jquery.bxslider.css',
        'css/site.css',

    ];
  
    public $js = [
        'css/assets/js/jquery-min.js',
        'css/assets/js/bootstrap.min.js',
        'css/assets/js/jquery.bxslider.js',
        'css/assets/js/selectnav.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
