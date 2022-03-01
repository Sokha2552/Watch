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
        'assets/css/owl.carousel.min.css',
        'assets/css/flaticon.css',
        'assets/css/slicknav.css',
        'assets/css/animate.min.css',
        'assets/css/magnific-popup.css',
        'assets/css/fontawesome-all.min.css',
        'assets/css/themify-icons.css',
        'assets/css/slick.css',
        'assets/css/nice-select.css',
        'assets/css/style.css',
        'css/site.css',
    ];
    public $js = [
        'assets/js/vendor/modernizr-3.5.0.min.js',
        // 'js/popper.min.js',
        // 'js/bootstrap.min.js',
        'assets/js/jquery.slicknav.min.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/slick.min.js',
        'assets/js/wow.min.js',
        'assets/js/animated.headline.js',
        'assets/js/jquery.magnific-popup.js',
        'assets/js/jquery.scrollUp.min.js',
        'assets/js/jquery.nice-select.min.js',
        'assets/js/jquery.sticky.js',
        'assets/js/contact.js',
        'assets/js/jquery.form.js',
        'assets/js/jquery.validate.min.js',
        'assets/js/mail-script.js',
        'assets/js/jquery.ajaxchimp.min.js',
        'assets/js/plugins.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
