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
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <div class="logo">
                        <div>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="ЭнергоПравовед">
                        </div>
                        <div>
                            <div class="logo-text">ЭнергоПравовед</div>
                            <span class="logo-sub">юридическая компания</span>
                        </div>
                    </div>
                </div>

                <div class="footer-col footer-nav">
                    <ul class="footer-menu">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Киоски</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Отзывы</a></li>
                    </ul>
                </div>
                <div class="footer-col footer-contacts" style="display:flex">
                    <div class="footer-contacts-left">
                        <div class="footer-contact-item">
                            <a href="tel:+79618956935">+7 (961) 895-69-35</a>
                        </div>
                        <div class="footer-contact-item">
                            <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="ВКонтакте"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone.svg" alt=""></a>
                        <a href="#" class="social-link" aria-label="ВКонтакте"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/vk.svg" alt=""></a>
                        <a href="#" class="social-link" aria-label="Telegram"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tg.svg" alt=""></a>
                        <a href="#" class="social-link" aria-label="Telegram"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/max.svg" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="footer-contact-item">
                        <span>Республика Хакасия<br>Красноярский край</span>
                    </div>
                </div>
            </div>
        </div>
    </header>