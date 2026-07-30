<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ЭнергоПравовед");
?>
<section class="hero">
    <div class="container hero-box">
        <div class="hero-text">
            <h1>ВАШ ГАРАНТ В <br>ВОПРОСАХ ЭНЕРГЕТИКИ</h1>
            <p>«ЭнергоПравовед» — это профильная юридическая компания, специализирующаяся исключительно на энергетическом праве. Мы работаем на территории Республики Хакасия и Красноярского края и помогаем гражданам, владельцам недвижимости и бизнесу решать любые споры с сетевыми и ресурсоснабжающими организациями.</p>
            <a href="#contacts" class="elda">
                Заказать консультацию
            </a>
        </div>
        <div class="hero-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/statue.png" alt="">
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="container">
        <div class="cards">
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/light.svg" alt="">
                <h3>Технологическое присоединение</h3>
                <p>Подключение объектов к электрическим сетям любой сложности.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/money.svg" alt="">
                <h3>Споры по начислениям</h3>
                <p>Оспаривание необоснованных начислений и задолженности.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/file.svg" alt="">
                <h3>Экспертиза документов</h3>
                <p>Проверка договоров, технических условий и актов.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/contract.svg" alt="">
                <h3>Юридическое сопровождение</h3>
                <p>Комплексная правовая поддержка организаций.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/law.svg" alt="">
                <h3>Представительство в суде</h3>
                <p>Подготовка документов и защита интересов клиента.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/edit.svg" alt="">
                <h3>Жалобы и заявления</h3>
                <p>Подготовка документов для любых государственных органов.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/search.svg" alt="">
                <h3>Судебная экспертиза</h3>
                <p>Подготовка экспертных заключений по энергетическим вопросам.</p>
                <a href="#">Подробнее</a>
            </div>
            <div class="card">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/doc.svg" alt="">
                <h3>Договорная работа</h3>
                <p>Разработка и анализ договоров любой сложности.</p>
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
</section>

<section class="principal" id="principal">
    <div class="container">
        <h1 class="index-h1">ПРИНЦИПЫ КОМПАНИИ</h1>
        <div class="principal-grid">
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Детальный анализ</h3>
                    <p>Мы не делаем поспешных выводов. Любая проблема с энергоснабжением начинается с тщательного изучения документов, цифр в квитанциях и обстоятельств дела, чтобы найти скрытые несоответствия и слабые места в позиции оппонента</p>
                    <a href="#" class="read-more-link">Подробнее</a>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Прозрачность и честность</h3>
                    <p>Мы открыто говорим о перспективах дела, возможных сложностях и реальной стоимости услуг. Вы всегда знаете, за что платите и какой результат можем гарантировать</p>
                    <a href="#" class="read-more-link">Подробнее</a>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Учёт рисков</h3>
                    <p>Мы предвидим возможные негативные сценарии и действия сетевых или сбытовых компаний. Наша задача — минимизировать ваши финансовые, временные и юридические риски на всех этапах</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Знание — во благо</h3>
                    <p>Наши уникальные компетенции на стыке юриспруденции и энергетики (два высших образования, опыт работы) направлены исключительно на защиту Ваших интересов и прав, а не на использование пробелов против вас</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Приоритет прав потребителя</h3>
                    <p>Ваши интересы как потребителя ресурса — в центре всего процесса. Мы восстанавливаем справедливость, если энергокомпании нарушают закон, злоупотребляют своим положением или необоснованно завышают платежи.</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Доступность и понятность</h3>
                    <p>Мы переводим сложный язык законов, нормативов и технических условий на простой, понятный вам язык. Вы всегда будете в курсе того, что происходит по вашему делу</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>В первую очередь — специалист</h3>
                    <p>Мы не «универсальные юристы». Наше образование и более чем 10-летний опыт работы именно в энергетике позволяют находить решения там, где другие видят лишь тупик</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Надёжность и партнёрство</h3>
                    <p>Мы строим долгосрочные отношения с клиентами, сопровождая их деятельность и становясь надёжным партнёром в вопросах энергоправовых отношений.</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Ориентация на результат</h3>
                    <p>Для нас важны не просто формально выигранные суды, а реальное изменение ситуации к лучшему: снижение сумм в счетах, фактическое подключение к сетям, взыскание положенных вам выплат и неустоек</p>
                </div>
            </div>
            <div class="principal-item">
                <div class="icon-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/galka.svg" alt="">
                </div>
                <div>
                    <h3>Взгляд со стороны эксперта</h3>
                    <p>Обладая квалификацией судебного эксперта, мы даём объективную, независимую оценку документов и ситуаций, которая станет весомым аргументом в переговорах или суде</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="quote">
    <div class="container" style="display: flex;">
        <div style="width: 30%;">
            <img style="width: 174;height: 173.36727905273438;angle: 0 deg;opacity: 1;top: 2320px;left: 120px;border-radius: 50%;
" src="<?= SITE_TEMPLATE_PATH ?>/images/borov.png" alt="">
            <p class="desktop-text-quote">
                Руководитель компании <br> Коваленко Илья Андреевич
            </p>
        </div>
        <div>
            <h2>
                «Принципы компании - это те принципы, которых я придерживаюсь во всём»
            </h2>
            <p class="mobile-text-quote">
                Руководитель компании <br> Коваленко Илья Андреевич
            </p>
        </div>


    </div>
    <div style="display:flex;flex-direction: column;justify-content: center;align-items: center;"><a style="margin-top: 50px;" href="#contacts" class="elda">
            Подробнее о компании
        </a></div>
</section>
<section class="price" id="price">
    <div class="container">
        <h1 class="index-h1">СТОИМОСТЬ УСЛУГ</h1>
        <div class="accordion">
            <div class="acc-item">
                <div class="acc-title">
                    Технологическое присоединение
                    <span class="acc-icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icongalka.svg" alt="">
                    </span>
                </div>
                <div class="acc-content">Стоимость рассчитывается индивидуально после изучения документов.</div>
            </div>
            <div class="acc-item">
                <div class="acc-title">
                    Сопровождение договоров
                    <span class="acc-icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icongalka.svg" alt="">
                    </span>
                </div>
                <div class="acc-content">
                    От 10 000 рублей.
                </div>
            </div>
            <div class="acc-item">
                <div class="acc-title">
                    Представительство в суде
                    <span class="acc-icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icongalka.svg" alt="">
                    </span>
                </div>
                <div class="acc-content">
                    От 30 000 рублей.
                </div>
            </div>
            <div class="acc-item">
                <div class="acc-title">
                    Экспертиза документов
                    <span class="acc-icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/icongalka.svg" alt="">
                    </span>
                </div>
                <div class="acc-content">
                    От 5 000 рублей.
                </div>
            </div>
        </div>
        <a style="margin-top: 50px;" href="#contacts" class="elda">
            Подробнее об услугах
        </a>
    </div>
</section>

<section class="contact-form">
    <div class="container">
        <div class="form-box">
            <form>
                <h1>Заполните форму и мы свяжемся с вами</h1>
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="e-mail">
                <input type="tel" placeholder="Телефон">
                <textarea placeholder="Комментарий"></textarea>
                <p>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных *
                </p>
                <button>Отправить</button>
            </form>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div class="contacts-grid">
            <!-- Колонка 1: Приглашение -->
            <div class="contacts-col">
                <h1>Свяжитесь с нами любым удобным способом</h1>
            </div>

            <!-- Колонка 2: Телефон и Email -->
            <div class="contacts-col">
                <div class="contacts-item">
                    <a href="tel:+79618956935">+7 (961) 895-69-35</a>
                </div>
                <div class="contacts-item">
                    <a href="mailto:info@energopravoved.ru">info@energopravoved.ru</a>
                </div>
                <div class="bottom-col bottom-social-block">
                    <div class="bottom-social">
                        <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/darktg.svg" alt=""></a>
                        <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/darkvk.svg" alt=""></a>
                        <a href="#" class="bottom-social-link"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/max.svg" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- Колонка 3: График работы -->
            <div class="contacts-col">
                <div class="contacts-item">
                    <div>
                        <strong>График работы:</strong><br><br>
                        <div class="schedule-full"> С понедельника по пятницу<br>
                            с 09:00 – 18:00</div>
                        <div class="schedule-short">
                            ПН-ПТ 09:00 - 18:00
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <div class="container">
        <h1 class="index-h1">ВОПРОС - ОТВЕТ</h1>

        <div class="faq-item">
            <h3>
                <span class="faq-question">Выставили 150 тысяч за технологическое присоединение участка, что делать?</span>
                <span class="faq-toggle">+</span>
            </h3>
            <p>Выставили 150 тысяч за технологическое присоединение участка, что делать?</p>
        </div>

        <div class="faq-item">
            <h3>
                <span class="faq-question">Я являюсь многодетной матерью, могу ли получить льготы при технологическом присоединении и кому еще они положены?</span>
                <span class="faq-toggle">+</span>
            </h3>
            <p>Я являюсь многодетной матерью, могу ли получить льготы при технологическом присоединении и кому еще они положены?</p>
        </div>

        <div class="faq-item">
            <h3>
                <span class="faq-question">Я являюсь многодетной матерью, могу ли получить льготы при технологическом присоединении и кому еще они положены?</span>
                <span class="faq-toggle">+</span>
            </h3>
            <p>Я являюсь многодетной матерью, могу ли получить льготы при технологическом присоединении и кому еще они положены?</p>
        </div>

    </div>
</section>

<section class="cases" id="cases">
    <div class="container">
        <h1 class="index-h1">КЕЙСЫ</h1>

        <div class="carousel-wrapper" id="carouselWrapper">
            <div class="carousel-track" id="track">
                <!-- повторяем карточки 8 раз для наглядности -->
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Подключение промышленного объекта</h3>
                        <p>Успешное сопровождение процедуры технологического присоединения.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Подключение промышленного объекта</h3>
                        <p>Успешное сопровождение процедуры технологического присоединения.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Выигран судебный спор</h3>
                        <p>Снижение необоснованных начислений энергоснабжающей компании.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Подготовка договоров</h3>
                        <p>Комплексное юридическое сопровождение предприятия.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Подготовка договоров</h3>
                        <p>Комплексное юридическое сопровождение предприятия.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Энергоаудит</h3>
                        <p>Проведение энергетического обследования с выдачей рекомендаций.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Сопровождение тендеров</h3>
                        <p>Полное юридическое и техническое сопровождение участия в тендерах.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Претензионная работа</h3>
                        <p>Досудебное урегулирование споров с поставщиками энергии.</p><a href="#">Подробнее</a>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="case">
                        <h3>Регистрация прав</h3>
                        <p>Оформление прав на земельные участки и объекты недвижимости.</p><a href="#">Подробнее</a>
                    </div>
                </div>
            </div>

            <button class="carousel-btn carousel-btn--prev" id="prevBtn">‹</button>
            <button class="carousel-btn carousel-btn--next" id="nextBtn">›</button>
        </div>

        <div class="progress-bar-wrapper" id="progressWrapper">
            <div class="progress-track">
                <div class="progress-fill" id="progressFill"></div>
            </div>
            <span class="progress-label" id="progressLabel">1 / 1</span>
        </div>
    </div>
</section>
<script>
    (function() {
        const track = document.getElementById('track');
        const slides = track.querySelectorAll('.carousel-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const progressFill = document.getElementById('progressFill');
        const progressLabel = document.getElementById('progressLabel');
        const wrapper = document.getElementById('carouselWrapper');

        const totalSlides = slides.length;
        let currentIndex = 0;
        let isCarouselMode = false;

        // Определяет, сколько карточек помещается в видимой области (с учётом погрешности)
        function getVisibleCount() {
            if (!isCarouselMode) return totalSlides;
            const wrapperWidth = wrapper.clientWidth;
            const slideWidth = slides[0].getBoundingClientRect().width;
            // Вычисляем точное количество, которое помещается
            let visible = Math.floor(wrapperWidth / slideWidth);
            // Корректировка, если остаток слишком мал (чтобы не было недобора)
            if (wrapperWidth / slideWidth - visible > 0.9) visible++; // если почти целое
            return Math.min(totalSlides, Math.max(1, visible));
        }

        function updateCarousel() {
            if (!isCarouselMode) {
                track.style.transform = 'translateX(0)';
                return;
            }

            const slideWidth = slides[0].getBoundingClientRect().width;
            const wrapperWidth = wrapper.clientWidth;
            // Точное число слайдов, которое могло бы поместиться (дробное)
            const exactVisible = wrapperWidth / slideWidth;
            // Округляем вверх, чтобы гарантировать, что последний слайд будет виден целиком
            const visibleCount = Math.ceil(exactVisible);
            // Максимальный индекс, при котором последний слайд не выходит за правый край
            let maxIndex = Math.floor(totalSlides - visibleCount);
            // Дополнительная проверка: если при таком индексе всё равно есть пустота, уменьшаем
            if (maxIndex >= 0) {
                const maxOffset = maxIndex * slideWidth;
                if (maxOffset + wrapperWidth > totalSlides * slideWidth + 0.5) {
                    maxIndex--;
                }
            }
            maxIndex = Math.max(0, maxIndex);

            // Корректируем текущий индекс
            currentIndex = Math.min(currentIndex, maxIndex);
            currentIndex = Math.max(currentIndex, 0);

            // Применяем сдвиг (по одной карточке)
            const offset = -currentIndex * slideWidth;
            track.style.transform = `translateX(${offset}px)`;

            // Шкала прогресса (0..100%)
            const progress = maxIndex === 0 ? 0 : (currentIndex / maxIndex) * 100;
            progressFill.style.width = progress + '%';
            progressLabel.textContent = `${currentIndex + 1} / ${maxIndex + 1}`;

            // Состояние кнопок
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }

        // Переключение режима (карусель / грид) в зависимости от ширины
        function toggleMode() {
            const width = window.innerWidth;
            const newMode = width < 1024;

            if (newMode !== isCarouselMode) {
                isCarouselMode = newMode;
                if (isCarouselMode) {
                    prevBtn.style.display = 'flex';
                    nextBtn.style.display = 'flex';
                    document.getElementById('progressWrapper').style.display = 'flex';
                    currentIndex = 0;
                    updateCarousel();
                } else {
                    prevBtn.style.display = 'none';
                    nextBtn.style.display = 'none';
                    document.getElementById('progressWrapper').style.display = 'none';
                    track.style.transform = 'translateX(0)';
                }
            } else if (isCarouselMode) {
                updateCarousel(); // пересчёт при ресайзе
            }
        }

        // Обработчики кнопок (перелистывание по 1 карточке)
        prevBtn.addEventListener('click', () => {
            if (!isCarouselMode) return;
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (!isCarouselMode) return;
            // Получаем актуальный maxIndex через вызов updateCarousel (или вычисляем сами)
            // Для надёжности пересчитаем maxIndex
            const slideWidth = slides[0].getBoundingClientRect().width;
            const wrapperWidth = wrapper.clientWidth;
            const exactVisible = wrapperWidth / slideWidth;
            const visibleCount = Math.ceil(exactVisible);
            let maxIndex = Math.floor(totalSlides - visibleCount);
            if (maxIndex >= 0) {
                const maxOffset = maxIndex * slideWidth;
                if (maxOffset + wrapperWidth > totalSlides * slideWidth + 0.5) {
                    maxIndex--;
                }
            }
            maxIndex = Math.max(0, maxIndex);
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });

        // Ресайз
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(toggleMode, 150);
        });
        window.addEventListener('load', () => {
            toggleMode();
        });

        // Инициализация
        toggleMode();

        // Клавиатура
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') prevBtn.click();
            if (e.key === 'ArrowRight') nextBtn.click();
        });
    })();
</script>

<section class="partners">
    <div class="container">
        <h2>НАШИ ПАРТНЕРЫ</h2>
        <div class="carousel">
            <div class="carousel-container">
                <div class="logos-wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/p1.svg" alt="Партнёр 1">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/p2.svg" alt="Партнёр 2">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/p3.svg" alt="Партнёр 3">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/p4.svg" alt="Партнёр 4">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/p5.svg" alt="Партнёр 5">
                </div>
            </div>
            <!-- Заменяем символы на иконки -->
            <button class="carousel-btn prev-btn">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/arrow.svg" alt="Назад" class="arrow-icon">
            </button>
            <button class="carousel-btn next-btn">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/arrow.svg" alt="Вперед" class="arrow-icon">
            </button>
        </div>
    </div>
</section>
</p><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>