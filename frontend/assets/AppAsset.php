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
        'style/css/owl.carousel.min.css',
        'style/css/flaticon.css',
        'style/css/slicknav.css',
        'style/css/animate.min.css',
        'style/css/magnific-popup.css',
        'style/css/fontawesome-all.min.css',
        'style/css/themify-icons.css',
        'style/css/slick.css',
        'style/css/nice-select.css',
        'style/css/style.css',
        'css/site.css',
    ];
    public $js = [
        'style/js/vendor/modernizr-3.5.0.min.js',
        // 'js/popper.min.js',
        // 'js/bootstrap.min.js',
        'style/js/jquery.slicknav.min.js',
        'style/js/owl.carousel.min.js',
        'style/js/slick.min.js',
        'style/js/wow.min.js',
        'style/js/animated.headline.js',
        'style/js/jquery.magnific-popup.js',
        'style/js/jquery.scrollUp.min.js',
        'style/js/jquery.nice-select.min.js',
        'style/js/jquery.sticky.js',
        'style/js/contact.js',
        'style/js/jquery.form.js',
        'style/js/jquery.validate.min.js',
        'style/js/mail-script.js',
        'style/js/jquery.ajaxchimp.min.js',
        'style/js/plugins.js',
        'style/js/main.js',
        'js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
