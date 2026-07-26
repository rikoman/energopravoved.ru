</main>

<footer>
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
</footer>
<style>
    /* ===== Footer ===== */
    footer {
        background: #061d38;
        padding: 60px 0 30px;
        color: white;
    }

    .footer-grid {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* центрируем колонки по вертикали – это правильно */
    }

    /* Логотип в футере */
    .footer-about .logo {
        display: flex;
        align-items: center;
        line-height: 1.2;
        gap: 20px;
    }

    .footer-about .logo img {
        display: block;
        width: 57px;
        height: auto;
        margin: 0 auto;
    }

    .footer-about .logo>div:last-child {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer-about .logo-text {
        font-size: 24px;
        font-weight: 700;
        color: #D8B36A;
        letter-spacing: 1px;
    }

    .footer-about .logo-sub {
        font-size: 14px;
        color: #E4BD6A;
        margin-top: 2px;
    }

    /* Меню в футере */
    .footer-menu {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-menu li a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
        font-size: 13px;
    }

    .footer-menu li a:hover {
        color: #D8B36A;
    }

    /* Контакты в футере */
    .footer-contacts {
        display: flex;
        align-items: center;
        /* центрируем содержимое правой колонки */
    }

    .footer-contacts-left,
    .footer-contacts-right {
        flex: 1 1 auto;
    }

    .footer-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 16px;
    }

    .footer-contact-item:last-child {
        margin-bottom: 0;
    }

    .footer-contact-item a {
        color: white;
        text-decoration: none;
        transition: color 0.3s;
        font-size: 13px;
    }

    .footer-contact-item a:hover {
        color: #D8B36A;
    }

    .footer-contact-item span {
        color: white;
        line-height: 1.5;
        font-size: 13px;
    }

    /* Социальные сети */
    .footer-social {
        display: flex;
        gap: 10px;
    }

    /* Адаптив */
    @media (max-width: 992px) {
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .footer-about {
            grid-column: 1 / -1;
            text-align: center;
        }

        .footer-about .logo {
            justify-content: center;
        }

        .footer-contacts {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-social {
            display: flex;
        }
    }

    @media (max-width: 600px) {
        .footer-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .footer-about .logo {
            justify-content: center;
        }

        .footer-menu {
            justify-content: center;
        }

        .footer-contacts {
            align-items: center;
        }

        .footer-social {
            justify-content: center;
        }
    }
</style>
</body>

</html>