<?php

use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/header.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/footer.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/main.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/aboutus.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/faq-toggle.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/burger-header.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/price-accordion.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/partners-carousel.js");

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
            <div class="header-block">
                <div class="container">
                    <div class="header-grid">
                        <!-- Логотип -->
                        <div class="header-col header-about">
                            <div class="header-logo">
                                <div>
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="ЭнергоПравовед">
                                </div>
                                <div>
                                    <div class="header-logo-text">ЭнергоПравовед</div>
                                    <span class="header-logo-sub">юридическая компания</span>
                                </div>
                            </div>
                        </div>

                        <!-- Бургер (только мобилка) -->
                        <div class="header-col header-burger">
                            <button class="burger-btn" aria-label="Открыть меню">
                                <span class="burger-line"></span>
                                <span class="burger-line"></span>
                                <span class="burger-line"></span>
                            </button>
                        </div>

                        <!-- Обёртка: меню + контакты + соцсети + адрес -->
                        <div class="header-col header-nav-wrapper">
                            <ul class="header-menu">
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Киоски</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">Отзывы</a></li>
                            </ul>

                            <div class="header-contacts">
                                <div class="header-contacts-left">
                                    <div class="header-contact-item">
                                        <a href="tel:+79618956935">+7 (961) 895-69-35</a>
                                    </div>
                                    <div class="header-contact-item">
                                        <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>
                                    </div>
                                </div>
                            </div>

                            <div class="header-social-block">
                                <div class="header-social">
                                    <a href="#" class="header-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone.svg" alt=""></a>
                                    <a href="#" class="header-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/vk.svg" alt=""></a>
                                    <a href="#" class="header-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tg.svg" alt=""></a>
                                    <a href="#" class="header-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/max.svg" alt=""></a>
                                </div>
                            </div>

                            <div class="header-address">
                                <div class="header-contact-item">
                                    <span>Республика Хакасия<br>Красноярский край</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>