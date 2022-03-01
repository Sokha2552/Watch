<?php

use yii\bootstrap4\Html as Bootstrap4Html;
use yii\bootstrap4\Html;
use yii\helpers\Url;
?>
<style>
    .header-right ul li {
        display: inline-block;
        position: relative;
        z-index: 1;
    }

    .header-right ul li:hover>ul.submenu {
        visibility: visible;
        opacity: 1;
        top: 100%;
    }

    .header-right ul ul.submenu {
        position: absolute;
        width: 150px;
        background: #fff;
        left: -215%;
        top: 90%;
        visibility: hidden;
        opacity: 0;
        box-shadow: 0 0 10px 3px rgb(0 0 0 / 5%);
        padding: 17px 0;
        border-top: 3px solid #ff2020;
        border-radius: 7px 7px 3px 3px;
        -webkit-transition: all .2s ease-out 0s;
        -moz-transition: all .2s ease-out 0s;
        -ms-transition: all .2s ease-out 0s;
        -o-transition: all .2s ease-out 0s;
        transition: all .2s ease-out 0s;
    }

    .header-right ul ul.submenu::before {
        border-style: solid;
        border-width: 0 6px 6px 6px;
        border-color: transparent transparent red transparent;
        content: "";
        top: -5px;
        left: 13%;
        position: absolute;
        transition: .3s;
        z-index: -1;
        overflow: hidden;
        -webkit-transition: all .3s ease-out 0s;
        -moz-transition: all .3s ease-out 0s;
        -ms-transition: all .3s ease-out 0s;
        -o-transition: all .3s ease-out 0s;
        transition: all .3s ease-out 0s;
    }

    .header-right ul ul.submenu>li>a {
        padding: 6px 10px !important;
        font-size: 16px;
        color: #0b1c39;
        text-transform: capitalize;
    }

    .header-right .submenu li {
        padding: 6px 10px !important;
        font-size: 16px;
        color: #0b1c39;
        text-transform: capitalize;
    }

    .header-right .submenu ul li a {
        font-size: 16px;
        font-family: "Josefin Sans", sans-serif;
        color: #141517;
        font-weight: 600;
        padding: 41px 21px;
        display: inline-block;
        text-transform: capitalize;
        display: block;
        -webkit-transition: all .3s ease-out 0s;
        -moz-transition: all .3s ease-out 0s;
        -ms-transition: all .3s ease-out 0s;
        -o-transition: all .3s ease-out 0s;
        transition: all .3s ease-out 0s;
    }
</style>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                                <li><a href="<?= Url::to(['site/shop']) ?>">shop</a></li>
                                <li><a href="<?= Url::to(['site/about']) ?>">about</a></li>
                                <li class="hot"><a href="#">Latest</a>
                                    <ul class="submenu">
                                        <li><a href="<?= Url::to(['site/shop']) ?>"> Product list</a></li>
                                        <li><a href="<?= Url::to(['site/product_details']) ?>"> Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= Url::to(['site/blog']) ?>">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="<?= Url::to(['site/blog']) ?>">Blog</a></li>
                                        <li><a href="<?= Url::to(['site/blog_details']) ?>">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="<?= Url::to(['site/login']) ?>">Login</a></li>
                                        <li><a href="<?= Url::to(['site/cart']) ?>">Cart</a></li>
                                        <li><a href="<?= Url::to(['site/elements']) ?>">Element</a></li>
                                        <li><a href="<?= Url::to(['site/confirmation']) ?>">Confirmation</a></li>
                                        <li><a href="<?= Url::to(['site/checkout']) ?>">Product Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= Url::to(['site/contact']) ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li>
                                <a href="<?= Url::to(['site/login']) ?>"><span class="flaticon-user"></span></a>
                                <ul class="submenu" style="display: inline-grid !important;">
                                    <li><a href="<?= Url::to(['site/login']) ?>">Login</a></li>
                                    <li> <?= Html::a('Logout', ['site/logout'], ['data' => [
                                                'method' => 'post',
                                            ]]) ?></li>
                                </ul>
                            </li>
                            <li><a href="<?= Url::to(['site/cart']) ?>"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>