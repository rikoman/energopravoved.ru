<?php

use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/bottom-panel.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/main.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/aboutus.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/faq-toggle.js");
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
            <div class="bottom-block">
                <div class="container">
                    <div class="bottom-grid">
                        <!-- Логотип -->
                        <div class="bottom-col bottom-about">
                            <div class="bottom-logo">
                                <div>
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" alt="ЭнергоПравовед">
                                </div>
                                <div>
                                    <div class="bottom-logo-text">ЭнергоПравовед</div>
                                    <span class="bottom-logo-sub">юридическая компания</span>
                                </div>
                            </div>
                        </div>

                        <!-- Бургер (только мобилка) -->
                        <div class="bottom-col bottom-burger">
                            <button class="burger-btn" aria-label="Открыть меню">
                                <span class="burger-line"></span>
                                <span class="burger-line"></span>
                                <span class="burger-line"></span>
                            </button>
                        </div>

                        <!-- Обёртка: меню + контакты + соцсети + адрес -->
                        <div class="bottom-col bottom-nav-wrapper">
                            <ul class="bottom-menu">
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Киоски</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">Отзывы</a></li>
                            </ul>

                            <div class="bottom-contacts">
                                <div class="bottom-contacts-left">
                                    <div class="bottom-contact-item">
                                        <a href="tel:+79618956935">+7 (961) 895-69-35</a>
                                    </div>
                                    <div class="bottom-contact-item">
                                        <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-social-block">
                                <div class="bottom-social">
                                    <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/phone.svg" alt=""></a>
                                    <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/vk.svg" alt=""></a>
                                    <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/tg.svg" alt=""></a>
                                    <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/max.svg" alt=""></a>
                                </div>
                            </div>

                            <div class="bottom-address">
                                <div class="bottom-contact-item">
                                    <span>Республика Хакасия<br>Красноярский край</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.burger-btn');
            const navWrapper = document.querySelector('.bottom-nav-wrapper');

            if (burger && navWrapper) {
                burger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.classList.toggle('active');
                    navWrapper.classList.toggle('open');
                });

                // Закрываем меню при клике вне его (опционально)
                document.addEventListener('click', function(e) {
                    if (!burger.contains(e.target) && !navWrapper.contains(e.target)) {
                        burger.classList.remove('active');
                        navWrapper.classList.remove('open');
                    }
                });
            }
        });
    </script>