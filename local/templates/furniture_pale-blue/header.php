<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <?php $APPLICATION->ShowHead(); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $APPLICATION->ShowTitle() ?></title>

</head>

<body>

    <?php $APPLICATION->ShowPanel(); ?>

    <header>

        <div class="container">

            <div class="top">

                <div class="logo">
                    <div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="ЭнергоПравовед">
                    </div>
                    <div>
                        <div class="logo-text">ЭнергоПравовед</div>
                        <span class="logo-sub">юридическая компания</span>
                    </div>
                </div>

                <nav>
                    <a href="#services">Главная</a>
                    <a href="#about">О компании</a>
                    <a href="#services">Услуги</a>
                    <a href="#cases">Кейсы</a>
                    <a href="#contacts">Контакты</a>
                    <a href="#contacts">Отзывы</a>

                </nav>

                <div class="phone">

                    <a href="tel:+79618956935">
                        +7 (961) 895-69-35
                    </a>
                    <br>
                    <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>

                </div>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="ВКонтакте">ВК</a>
                    <a href="#" class="social-link" aria-label="Telegram">TG</a>
                    <a href="#" class="social-link" aria-label="WhatsApp">WA</a>
                    <a href="#" class="social-link" aria-label="YouTube">YT</a>
                </div>
                <div class="footer-contacts-right">
                    <div class="footer-contact-item">
                        <span class="footer-icon">📍</span>
                        <span>Республика Хакасия<br>Красноярский край</span>
                    </div>
                </div>

            </div>

        </div>

    </header>