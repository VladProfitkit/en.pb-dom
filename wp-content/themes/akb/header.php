<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="yandex-verification" content="503beac3dabbbc22" />
    <meta name="google-site-verification" content="nyETLiaVW0Km1wyVwtpA9eG2y8VYrxtiKJX3X_5bmCA" />
    <title><?php echo get_post_meta($post->ID, 'title', true); ?><?php /*bloginfo('name'); */?><?php /*wp_title("-"); */?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />-->
    <!--<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />-->
    <meta name="google-site-verification" content="nyETLiaVW0Km1wyVwtpA9eG2y8VYrxtiKJX3X_5bmCA" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78894850-53"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-78894850-53');
    </script>

    <link rel="icon" href="/wp-content/themes/akb/img/favicon.ico" type="image/x-icon"/>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php
    wp_enqueue_scripts();
    wp_head();
    ?>
</head>
<body>

<div class="popup__overlay">
    <div class="popup">
        <a href="#" class="popup__close">X</a>
        <p style = "font-weight: bold; font-size: 24">Закажите звонок!</p>
        <p>Оставьте свои контактные данные для звонка</p>
        <?php echo do_shortcode('[contact-form-7 id="85" title="Заказать звонок"]'); ?>
    </div>
    <script>
         var zakazZvonka = document.querySelector('#zakazZvonka');
            zakazZvonka.onclick = function (){
        yaCounter48950435.reachGoal('zakazForm');
    }
    </script>
</div>

<div id="wrapper">
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo-box">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="/wp-content/uploads/2020/08/logos-11.png" alt="logo"></a>
                    </div>
                </div>
                <div class="navbar-collapse collapse text-center">
                    <div class="call-box">
                        <div><a href="tel:+79531599233" onclick="gtag('event', 'phone_click', {'event_category': 'telefon', 'event_action': 'click'}); return true;">+7 (953) 159-92-33</a></div>
                        <?/*<div><input type="button" value="Заказать звонок" id="popup__toggle" class="my_button"></div>*/?>
                    </div>
                    <?php wp_nav_menu(
                        array(
                            "menu" => "main",
                            "menu_class" => "nav navbar-nav",
                            "container" => false
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </header>