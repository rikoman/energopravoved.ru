</main>

<footer>
    <div class="container">
        <div class="footer-grid">
            <!-- Левая колонка: Логотип + описание -->
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

            <!-- Центральная колонка: Меню (горизонтально) -->
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

            <!-- Правая колонка: Контакты + Соцсети -->
            <div class="footer-col footer-contacts" style="display:flex">
                <div class="footer-contacts-left">
                    <div class="footer-contact-item">
                        <span class="footer-icon">📞</span>
                        <a href="tel:+79618956935">+7 (961) 895-69-35</a>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-icon">✉️</span>
                        <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>
                    </div>
                </div>
                <!-- Блок социальных сетей (горизонтально) -->
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
    </div>
</footer>
<style>
    /* ===== Footer ===== */
    footer {
        background: #061d38;
        padding: 60px 0 30px;
        color: #ddd;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1.5fr;
        gap: 40px;
        align-items: start;
    }

    /* Логотип в футере */
    .footer-about .logo {
        display: flex;
        align-items: flex-start;
        line-height: 1.2;
        gap: 20px;
    }

    .footer-about .logo img {
        max-width: 120px;
        height: auto;
        margin-bottom: 10px;
    }

    .footer-about .logo-text {
        font-size: 28px;
        font-weight: 700;
        color: #D8B36A;
        letter-spacing: 1px;
    }

    .footer-about .logo-sub {
        font-size: 14px;
        color: #aaa;
        margin-top: 2px;
    }

    /* Меню в футере (горизонтальное) */
    .footer-menu {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-menu li a {
        color: #ddd;
        text-decoration: none;
        transition: color 0.3s;
        font-size: 16px;
    }

    .footer-menu li a:hover {
        color: #D8B36A;
    }

    /* Контакты в футере – две колонки внутри */
    .footer-contacts {
        display: flex;
        align-items: flex-start;
    }

    .footer-contacts-left,
    .footer-contacts-right {
        flex: 1 1 auto;
    }

    .footer-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .footer-contact-item:last-child {
        margin-bottom: 0;
    }

    .footer-icon {
        font-size: 22px;
        line-height: 1;
        flex-shrink: 0;
    }

    .footer-contact-item a {
        color: #ddd;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-contact-item a:hover {
        color: #D8B36A;
    }

    .footer-contact-item span {
        color: #ddd;
        line-height: 1.5;
    }

    /* Социальные сети (горизонтально) */
    .footer-social {
        display: flex;
        gap: 15px;
        margin-top: 20px;
        width: 100%;
    }

    .social-link {
        display: inline-block;
        padding: 8px 16px;
        background: rgba(255, 255, 255, 0.08);
        color: #ddd;
        text-decoration: none;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 600;
        transition: background 0.3s, color 0.3s;
    }

    .social-link:hover {
        background: #D8B36A;
        color: #061d38;
    }

    /* Адаптив */
    @media (max-width: 992px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .footer-about {
            grid-column: 1 / -1;
            text-align: center;
        }

        .footer-about .logo {
            align-items: center;
        }

        .footer-contacts {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-social {
            justify-content: center;
        }
    }

    @media (max-width: 600px) {
        .footer-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .footer-about .logo {
            align-items: center;
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