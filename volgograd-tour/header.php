<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volgograd-tour
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экскурсии по городу Волгограду</title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico"> <!-- 32×32 -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple.png"> <!-- 180×180 -->
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">
</head>




<body class="page-body" id="top">
    <div class="page-container">
        <!-- HEADER -->
        <h1 class="visually-hidden">Достопримечательности Волгограда, Экскурсии</h1>
        <header class="main-header">
            <nav class="main-navigation--closed main-navigation">
                <h2 class="visually-hidden">Site navigation</h2>
                <div class="main-navigation__togle--close"></div>
                <ul class="main-navigation__list">
                    <li class="main-navigation__item">
                        <a href="index.html">Главная</a>
                    </li>
                    <li class="main-navigation__item">
                        <a href="<?php echo get_template_directory_uri(); ?>/test.html">Экскурсии</a>
                    </li>
                    <li class="main-navigation__item--logo main-navigation__item">
                        <a href="index.html">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-desktop.svg" media="(min-width:1200px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg" media="(max-width:767px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-desktop.svg" alt="Логотип экскурсий по Волгограду">
                            </picture>
                        </a>
                    </li>
                    <li class="main-navigation__item">
                        <a href="#">Контакты</a>
                    </li>
                    <li class="main-navigation__item">
                        <a href="#">Статьи</a>
                    </li>
                </ul>

            </nav>

            <div class="main-navigation-line">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg" media="(max-width:767px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg" alt="Логотип экскурсий по Волгограду">
                </picture>

                <div class="main-navigation__togle--open">
                    <h3 class="visually-hidden">Открыть мобильное меню</h3>
                </div>

            </div>
            <div class="intro-wrapper">
                <div class="intro">
                    <picture class="intro__slogan">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/text-desctop.svg" media="(min-width:501px)">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/text-mobile.svg" media="(max-width:500px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/text-index-desctop.svg" alt="Текст заставки Волгоград">
                    </picture>

                </div>
            </div>
        </header>