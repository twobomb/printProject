<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php  $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias("@web").'/img/favicon/favicon.ico'])?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header bg-fff d-flex flex-column">
    <div class="toggle-menu-top d-block d-xl-none d-lg-none">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <aside class="sidebar">
        <ul class="sidebar-menu">
            <li class=""><a href="#">Статьи</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Конструктор</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Дизайнерам</a></li>
            <li><a href="#">Магазины</a></li>
            <li><a href="#">Где мой заказ?</a></li>
        </ul>
        <div class="d-flex flex-column">
            <a href="mailto:info@cafeprint.com" class="mail">info@cafeprint.com</a>
            <a href="tel:+380931231212" class="phone-number kiyevstar">+38 (093) 1231212</a>
            <a href="tel:+380931231212" class="phone-number lifecell">+38 (093) 1231212</a>
            <a href="tel:+380931231212" class="phone-number mts">+38 (093) 1231212</a>
        </div>
    </aside>
    <div class="sidebar-overflow"></div>
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="top-menu d-flex justify-content-between align-items-center">
                    <ul class="d-flex">
                        <li class="active"><a href="#">Статьи</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Конструктор</a></li>
                        <li><a href="#">Цены</a></li>
                    </ul>
                    <ul class="d-flex">
                        <li><a href="#">Дизайнерам</a></li>
                        <li><a href="#">Магазины</a></li>
                        <li><a href="#">Где мой заказ?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="main-header-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="main-header-left mb-4 mb-md-0">
                        <a href="#" class="logo"><img src="<?PHP echo Yii::getAlias("@web")."/img/logo.png";?>" alt=""></a>
                    </div>
                    <div class="main-header-center d-none d-lg-flex align-items-center">
                        <a href="tel:+380931231212" class="phone-number kiyevstar">+38 (093) 1231212</a>
                        <a href="tel:+380931231212" class="phone-number lifecell">+38 (093) 1231212</a>
                        <a href="tel:+380931231212" class="phone-number mts">+38 (093) 1231212</a>
                        <a href="mailto:info@cafeprint.com" class="mail">info@cafeprint.com</a>
                    </div>
                    <div class="main-header-right d-flex align-items-center">
                        <a href="#" class="soc-icons insta"></a>
                        <a href="#" class="soc-icons google"></a>
                        <a href="#" class="soc-icons fb"></a>
                        <a href="#" class="user">
                            <svg>
                                <path d="M24,12A12,12,0,1,0,3.895,20.84l-.011.01.389.328c.025.021.053.039.078.06.207.171.421.334.639.492.071.051.141.1.213.152q.35.241.717.457l.161.093c.267.152.541.3.82.428l.062.028a11.892,11.892,0,0,0,2.9.919l.08.014c.316.055.635.1.959.127l.118.009c.322.027.648.044.977.044s.649-.017.97-.043l.122-.009q.481-.044.95-.125l.082-.015a11.891,11.891,0,0,0,2.861-.9l.1-.045q.4-.19.79-.408l.192-.11c.235-.138.466-.283.69-.436.081-.055.16-.113.24-.171.192-.138.38-.28.562-.429.041-.033.084-.061.124-.095l.4-.333-.012-.01A11.969,11.969,0,0,0,24,12ZM.873,12a11.127,11.127,0,1,1,18.507,8.318,3.27,3.27,0,0,0-.39-.234l-3.695-1.847a.967.967,0,0,1-.538-.87v-1.29c.086-.106.176-.225.269-.357a8.892,8.892,0,0,0,1.142-2.235,1.584,1.584,0,0,0,.91-1.435V10.5a1.588,1.588,0,0,0-.387-1.034V7.433a3.52,3.52,0,0,0-.822-2.559A4.912,4.912,0,0,0,12,3.491,4.913,4.913,0,0,0,8.131,4.873a3.52,3.52,0,0,0-.822,2.559V9.469A1.59,1.59,0,0,0,6.922,10.5v1.547a1.587,1.587,0,0,0,.585,1.231,8.2,8.2,0,0,0,1.35,2.788v1.263a.973.973,0,0,1-.507.854L4.9,20.067a3.154,3.154,0,0,0-.328.208A11.1,11.1,0,0,1,.873,12Zm17.655,9q-.229.166-.466.321c-.072.047-.144.094-.218.14-.206.127-.415.249-.629.362l-.142.073a11.119,11.119,0,0,1-1.522.644l-.055.019q-.41.136-.831.241h0c-.283.07-.569.128-.857.175l-.024,0c-.271.044-.544.076-.818.1l-.146.011c-.271.021-.543.034-.817.034s-.552-.014-.827-.034l-.142-.011c-.277-.024-.552-.057-.825-.1l-.037-.007a11.086,11.086,0,0,1-1.7-.424l-.051-.017q-.412-.14-.813-.311l-.006,0c-.252-.109-.5-.229-.744-.356l-.1-.049c-.223-.119-.441-.248-.656-.382l-.19-.122c-.2-.13-.394-.264-.584-.407l-.058-.045.042-.024,3.45-1.882a1.845,1.845,0,0,0,.962-1.621V15.759l-.1-.121a7.286,7.286,0,0,1-1.31-2.712l-.04-.173-.149-.1a.723.723,0,0,1-.336-.607V10.5a.713.713,0,0,1,.243-.534l.144-.13V7.408l0-.057a2.628,2.628,0,0,1,.609-1.9A4.112,4.112,0,0,1,12,4.364,4.122,4.122,0,0,1,15.206,5.44a2.672,2.672,0,0,1,.617,1.912l0,2.488.144.13a.713.713,0,0,1,.243.534V12.05a.729.729,0,0,1-.515.687l-.217.067-.07.216a8.073,8.073,0,0,1-1.089,2.2c-.114.161-.226.3-.321.414l-.108.123v1.614a1.835,1.835,0,0,0,1.02,1.65L18.6,20.865l.07.036C18.623,20.936,18.575,20.969,18.528,21Z"></path>
                            </svg>
                        </a>
                        <div class="language dropdown">
                            <a href="#" id="ukr"></a>
                            <div class="dropdown-content">
                                <a href="#" id="ru"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="nav-content d-flex justify-content-between align-items-center">
                    <div class="toggle-menu d-block d-xl-none d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="main-menu">
                        <li class="dropdown">
                            <a href="#">Чехлы</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Посуда</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Одежда</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Подарки</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Интерьер</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="dropdown">
                            <a href="#">Аксуссуары</a>
                            <div class="dropdown-content"></div>
                        </li>
                        <li class="red">
                            <a href="#">Свой дизайн</a>
                        </li>
                    </ul>
                    <ul class="navbar">
                        <li>
                            <a href="#" class="search">
                                <svg>
                                    <path d="M23.867,24.191,16.874,16.9a9.883,9.883,0,1,0-.7.636l7.009,7.309a.47.47,0,0,0,.665.013A.473.473,0,0,0,23.867,24.191ZM9.88,18.872a8.964,8.964,0,1,1,8.941-8.964A8.963,8.963,0,0,1,9.88,18.872Z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="heart">
                                <svg>
                                    <path d="M22.568,2.607A6.65,6.65,0,0,0,17.682.263,5.664,5.664,0,0,0,17.1.233,7,7,0,0,0,11.831,2.68,7,7,0,0,0,6.559.233a5.668,5.668,0,0,0-.581.03A6.652,6.652,0,0,0,1.1,2.607,6.727,6.727,0,0,0,.12,7.932c.527,3.21,4.682,7.116,8.02,10.257l.076.072c.93.875,1.733,1.631,2.256,2.194a2.253,2.253,0,0,0,1.406.778,2.171,2.171,0,0,0,1.383-.777c.556-.6,1.459-1.458,2.349-2.3,3.3-3.132,7.41-7.029,7.93-10.226A6.714,6.714,0,0,0,22.568,2.607ZM22.7,7.794c-.475,2.914-4.468,6.7-7.693,9.761-.883.836-1.8,1.7-2.384,2.337-.146.172-.514.491-.747.491a1.481,1.481,0,0,1-.776-.5c-.55-.591-1.362-1.357-2.3-2.243l-.077-.072C5.478,14.517,1.439,10.719.959,7.795a5.927,5.927,0,0,1,.813-4.673A5.861,5.861,0,0,1,6.066,1.108c.159-.016.322-.026.492-.026a6.066,6.066,0,0,1,4.92,2.543l.352.518.352-.518A6.066,6.066,0,0,1,17.1,1.082a4.876,4.876,0,0,1,.49.026,5.862,5.862,0,0,1,4.3,2.014A5.917,5.917,0,0,1,22.7,7.794Z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="shop-card">
                                <svg>
                                    <path d="M16,19.486a2.5,2.5,0,1,1,2.5,2.5A2.475,2.475,0,0,1,16,19.486Zm1,0a1.5,1.5,0,1,0,1.5-1.5A1.537,1.537,0,0,0,17,19.486Zm-11,0a2.5,2.5,0,1,1,2.5,2.5A2.475,2.475,0,0,1,6,19.486Zm1,0a1.5,1.5,0,1,0,1.5-1.5A1.537,1.537,0,0,0,7,19.486Zm1.9-3.5a3.523,3.523,0,0,1-3.4-2.8L3.1,1H.5A.472.472,0,0,1,0,.5.472.472,0,0,1,.5,0h3c.2,0,.5.2.5.4L4.5,3h19a.52.52,0,0,1,.4.2.493.493,0,0,1,.1.3l-2,7.994a.43.43,0,0,1-.4.4L7,13.89a2.306,2.306,0,0,0,2,1.1H20.4a.5.5,0,1,1,0,1Zm-2.4-3.1,14.6-1.9,1.7-7.1H4.7Z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="top-slider-section bg-fff">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-slider">
                    <div class="top-slider-item">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<nav aria-label="breadcrumb" class="breadcrumb-nav bg-fff">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 d-flex flex-column flex-lg-row text-center align-items-center text-sm-left justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Продукция</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Категория Дизайнера</li>
                </ol>
                <p class="current-page">Категория Дизайнера</p>
            </div>
        </div>
    </div>
</nav>
<section class="border-top-grey bg-fff main-content">
    <div class="container">
        <?PHP echo $content; ?>
    </div>
</section>

<section class="start-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 col-12 d-flex justify-content-center align-items-center">
                <p class="m0 text-center">Не нашли подходящий дизайн?</p>
            </div>
            <div class="col-md-5 col-12 d-flex justify-content-center align-items-center">
                <a href="#" class="btn">Перейти в контсруктор</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-fff">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="scroll-text my-4">
                    Интернет-магазин Mfest предлагает качественную печать на футболках, майках, толстовках и другой одежде. Наша дружная команда специалистов готова в максимально сжатые сроки выполнить качественную печать на футболках любой сложности. Мы используем проверенные способы печати, учитывая их преимущества и недостатки, чтобы нанесенный принт не испортился, не потерял внешний вид даже после многократных стирок и радовал вас еще долго.Интернет-магазин Mfest предлагает качественную печать на футболках, майках, толстовках и другой одежде. Наша дружная команда специалистов готова в максимально сжатые сроки выполнить качественную печать на футболках любой сложности. Мы используем проверенные способы печати, учитывая их преимущества и недостатки, чтобы нанесенный принт не испортился, не потерял внешний вид даже после многократных стирок и радовал вас еще долго.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="form-section section bg-fff border-top-grey py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-12">
                <h3>Подпишись на новости от <span class="text-uppercase">cafe</span><span class="green text-uppercase">print</span></h3>
                <p>и будь всегда в курсе новинок и акций на нашу продукцию</p>
            </div>
            <div class="col-lg-5 col-12">
                <form id="w0" class="subscribe" action="" method="post" novalidate="novalidate">
                    <input type="hidden" name="_csrf-frontend" value="">
                    <div class="form-group">
                        <input type="text" id="" class="" name="EntryForm[email]" placeholder=" Введите Email">
                        <!-- <p class="help-block help-block-error"></p> -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-border-bottom">Подписаться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="bg-fff">
        <div class="container">
            <div class="row d-flex justify-content-md-between justify-content-center">
                <div class="col-md-5 col-8 mb-3 mb-md-0 d-none d-md-block">
                    <div class="tittle">Инфомация</div>
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <ul class="flex-column w-50">
                            <li><a href="#">Как сделать заказ?</a></li>
                            <li><a href="#">Доставка и оплата</a></li>
                            <li><a href="#">Обмен и возврат</a></li>
                            <li><a href="#">Где мой заказ?</a></li>
                        </ul>
                        <ul class="flex-column w-50">
                            <li><a href="#">Пользовательское соглашение</a></li>
                            <li><a href="#">Наш прайс</a></li>
                            <li><a href="#">Размерная сетка</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 col-8 mb-3 mb-md-0 d-none d-md-block">
                    <div class="tittle">Сотрудничество</div>
                    <ul class="d-flex flex-column">
                        <li><a href="#">Оптовым клиентам</a></li>
                        <li><a href="#">Дропшипинг</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xl-2 col-8 mb-3 mb-md-0">
                    <div class="tittle">О нас</div>
                    <ul class="d-flex flex-column align-items-center">
                        <li><a href="tel:+380931231212" class="phone-number kiyevstar">+38 (093) 1231212</a></li>
                        <li><a href="tel:+380931231212" class="phone-number lifecell">+38 (093) 1231212</a></li>
                        <li><a href="tel:+380931231212" class="phone-number mts">+38 (093) 1231212</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="d-flex align-items-center flex-column flex-md-row">
                <a href="#" class="footer-logo"><img src="<?PHP echo Yii::getAlias("@web")."/img/logo.png";?>" alt="logo"></a>
                <p class="copy">©2018 Все права защищены 18+</p>
            </div>
            <div class="d-flex align-items-center mt-4 mt-md-0">
                <a href="mailto:info@cafeprint.com" class="mail">info@cafeprint.com</a>
                <a href="#" class="soc-icons insta"></a>
                <a href="#" class="soc-icons google"></a>
                <a href="#" class="soc-icons fb"></a>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
