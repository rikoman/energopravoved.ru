<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ЭнергоГарант - Юридическая защита</title>
	<!-- Google Fonts для типографики -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<style>
		:root {
			--bg-dark: #0b1a32;
			--gold-accent: #d4b45f;
			--gold-light: #f0e2c0;
			--btn-primary: #f4d849;
			--btn-primary-hover: #e6c635;
			--text-white: #ffffff;
			--text-light-muted: #e0e0e0;
			--text-dark: #1a1a1a;
			--card-bg: #fefcf5;
			--card-bg-2: #ffffff;
			--radius-lg: 24px;
			--radius-sm: 12px;
			--border-color: rgba(255, 255, 255, 0.15);
			--container-width: 1280px;
			--header-height: 80px;
			--transition: 0.3s ease;
		}

		.about {
			margin-top: 50px;
		}

		.regions__col li {
			margin-left: 20px;
		}

		.section-title span {
			color: var(--gold-accent);
		}

		.btn {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			padding: 14px 32px;
			border-radius: 50px;
			font-weight: 600;
			font-size: 0.95rem;
			cursor: pointer;
			transition: all var(--transition);
			border: 2px solid transparent;
			text-align: center;
			white-space: nowrap;
		}

		.btn-primary {
			background-color: var(--btn-primary);
			color: var(--text-dark);
			border-color: var(--btn-primary);
		}

		.btn-primary:hover {
			background-color: var(--btn-primary-hover);
			border-color: var(--btn-primary-hover);
			transform: translateY(-2px);
			box-shadow: 0 4px 15px rgba(244, 216, 73, 0.3);
		}

		.btn-outline-light {
			background-color: transparent;
			color: var(--text-white);
			border-color: rgba(255, 255, 255, 0.6);
		}

		.btn-outline-light:hover {
			background-color: var(--text-white);
			color: var(--bg-dark);
			border-color: var(--text-white);
		}

		.btn-outline-dark {
			background-color: transparent;
			color: var(--text-dark);
			border-color: rgba(26, 26, 26, 0.3);
		}

		.btn-outline-dark:hover {
			background-color: var(--text-dark);
			color: var(--text-white);
			border-color: var(--text-dark);
		}

		.hero {
			position: relative;
			min-height: 520px;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
			background: linear-gradient(rgba(11, 26, 50, 0.85), rgba(11, 26, 50, 0.85)),
				url('/local/templates/furniture_pale-blue/images/aboutus.jpg') center/cover no-repeat;
			padding: 40px 20px;
		}

		.hero__title {
			font-size: 3.8rem;
			font-weight: 900;
			letter-spacing: 0.1em;
			text-transform: uppercase;
			color: var(--gold-accent);
			margin-bottom: 1.5rem;
			line-height: 1.2;
		}

		.hero__subtitle {
			font-size: 1.2rem;
			color: var(--text-light-muted);
			margin-bottom: 2.5rem;
			max-width: 700px;
			margin-left: auto;
			margin-right: auto;
		}

		.hero__actions {
			display: flex;
			gap: 20px;
			justify-content: center;
			flex-wrap: wrap;
		}


		/* ===== 8. Regions Section ===== */



		.regions__grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 40px;
			margin-top: 30px;
		}



		/* ===== 10. Responsive Adaptivity ===== */
		/* Desktop Extra Large */
		@media (max-width: 1280px) {
			.hero__title {
				font-size: 3.2rem;
			}
		}

		/* Desktop Medium */
		@media (max-width: 1024px) {



			.regions__grid {
				grid-template-columns: 1fr;
			}
		}

		/* Tablet & Mobile */
		@media (max-width: 768px) {

			/* Simplify header on small screens */

			.hero {
				min-height: 70vh;
				padding: 60px 20px;
			}

			.hero__title {
				font-size: 2.2rem;
			}

			.hero__subtitle {
				font-size: 1rem;
			}

			.hero__actions {
				flex-direction: column;
				align-items: center;
				width: 100%;
			}

			.hero__actions .btn {
				width: 100%;
				max-width: 300px;
			}





		}

		/* Small Mobile */
		@media (max-width: 480px) {
			.hero__title {
				font-size: 1.8rem;
				letter-spacing: 0.05em;
			}

			.btn {
				padding: 12px 20px;
				font-size: 0.9rem;
				white-space: normal;
			}


		}


		.about__title {
			background: linear-gradient(91.43deg, #F8D797 3.9%, #C6941F 96.1%);
			background-clip: text;
			color: transparent;
			display: inline-block;
		}

		.about__text p {
			margin-top: 20px;
			color: #ffffff;
		}

		.section-title {
			color: #F5D390;
		}

		.regions {
			color: #ffffff;
		}


		/* Контейнер для команды */
		.team-container {
			margin-top: 50px;
			margin-bottom: 50px;
			width: 100%;
			display: flex;
			flex-direction: column;
			/* Вертикальный список */
			gap: 60px;
			/* Отступ между карточками */
		}

		/* Карточка специалиста */
		.person-wrapper {
			display: flex;
			gap: 30px;
			align-items: stretch;
			/* Растягиваем колонки на одинаковую высоту */
		}

		/* Левая колонка (на темном фоне) */
		.sidebar {
			flex: 0 0 280px;
			display: flex;
			flex-direction: column;
			gap: 20px;
		}

		.avatar-wrapper {
			width: 100%;
			aspect-ratio: 1 / 1.1;
			border-radius: 12px;
			overflow: hidden;
			background-color: #eee;
		}

		.avatar-wrapper img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.profile-name {
			font-size: 22px;
			font-weight: 700;
			text-transform: uppercase;
			color: #ffffff;
			line-height: 1.2;
		}

		.profile-title {
			font-size: 15px;
			color: #ffffff;
			line-height: 1.4;
		}

		.profile-expertise {
			font-size: 14px;
			color: #ffffff;
			line-height: 1.6;
		}

		/* Правая колонка (Белый блок) */
		.main-card {
			flex: 1;
			background-color: #ffffff;
			border-radius: 20px;
			padding: 30px;
			display: flex;
			flex-direction: column;
			gap: 30px;
			min-width: 300px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
		}

		/* Верхняя часть правой колонки (сетка) */
		.info-grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 30px;
		}

		.info-section h3 {
			font-size: 14px;
			text-transform: uppercase;
			color: #0e2d4c;
			margin-bottom: 15px;
			letter-spacing: 0.5px;
		}

		.info-section ul {
			list-style: none;
			font-size: 13px;
			line-height: 1.6;
			color: #222;
		}

		.info-section ul li {
			position: relative;
			padding-left: 15px;
			margin-bottom: 4px;
		}

		.info-section ul li::before {
			content: "•";
			position: absolute;
			left: 0;
			color: #333;
		}

		.education-item {
			display: flex;
			justify-content: space-between;
			font-size: 13px;
			margin-bottom: 6px;
		}

		.education-item span:first-child {
			color: #222;
			padding-right: 10px;
		}

		.education-item span:last-child {
			text-align: right;
			color: #0e2d4c;
		}

		.experience-title {
			font-weight: bold;
			margin-bottom: 10px;
			font-size: 14px;
		}

		.job-item {
			margin-top: 10px;
		}

		.job-dates {
			color: #0e2d4c;
			font-size: 12px;
			font-weight: bold;
			margin-bottom: 3px;
			display: block;
		}

		.job-desc {
			font-size: 13px;
			line-height: 1.4;
		}

		.career-link {
			display: inline-block;
			margin-top: 10px;
			font-size: 13px;
			color: #0e2d4c;
			text-decoration: none;
			font-weight: bold;
		}

		.career-link::after {
			content: "▼";
			font-size: 10px;
			margin-left: 5px;
			color: #e2cd9d;
		}

		/* Кнопки */
		.actions-row {
			margin-top: auto;
			display: flex;
			flex-wrap: wrap;
			gap: 15px;
		}

		.btn {
			flex: 1;
			min-width: 140px;
			background-color: #f1dcb8;
			color: #000;
			text-decoration: none;
			text-align: center;
			padding: 14px 10px;
			border-radius: 30px;
			font-weight: 600;
			font-size: 14px;
			transition: opacity 0.2s;
			cursor: pointer;
			border: none;
		}

		.btn:hover {
			opacity: 0.9;
		}

		/* Адаптивность для планшетов и телефонов */
		@media (max-width: 768px) {
			.person-wrapper {
				flex-direction: column;
			}

			.sidebar {
				flex: 1;
				width: 100%;
			}

			.main-card {
				width: 100%;
			}

			.info-grid {
				grid-template-columns: 1fr;
				gap: 20px;
			}

			.actions-row {
				flex-direction: column;
			}

			.btn {
				width: 100%;
			}
		}

		/* =========================================
   БЛОК ДЛЯ ОРГАНИЗАЦИЙ (не пересекается с людьми)
   ========================================= */
		.org-wrapper {
			display: flex;
			gap: 30px;
			align-items: stretch;
			margin-bottom: 60px;
			/* Отступ от предыдущего контента */
		}

		/* Левая часть (Логотип на белом фоне) */
		.org-logo-box {
			flex: 0 0 280px;
			background-color: #ffffff;
			border-radius: 20px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 30px;
		}

		.org-logo-box img {
			max-width: 100%;
			height: auto;
			display: block;
		}

		/* Заглушка логотипа (текстовая), если нет картинки */
		.org-logo-placeholder {
			text-align: center;
			color: #0e2d4c;
		}

		.org-logo-placeholder .big-text {
			font-size: 80px;
			font-weight: 900;
			line-height: 0.8;
			letter-spacing: -5px;
		}

		.org-logo-placeholder .small-text {
			font-size: 14px;
			font-weight: 600;
			letter-spacing: 3px;
			text-transform: uppercase;
			margin-top: 10px;
		}

		/* Правая часть (Основная информация) */
		.org-info-box {
			flex: 1;
			background-color: #f6f2e3;
			/* Бежевый цвет */
			border-radius: 20px;
			padding: 30px;
			display: flex;
			flex-direction: column;
			gap: 25px;
			min-width: 300px;
		}

		.org-heading {
			font-size: 14px;
			font-weight: 700;
			text-transform: uppercase;
			color: #000;
			line-height: 1.4;
		}

		/* Сетка для двух филиалов */
		.org-grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 30px;
		}

		.org-col h4 {
			font-size: 15px;
			font-weight: 700;
			text-transform: uppercase;
			color: #000;
			margin-bottom: 10px;
			line-height: 1.3;
		}

		.org-col h5 {
			font-size: 14px;
			font-weight: 700;
			text-transform: uppercase;
			color: #000;
			margin-bottom: 10px;
			margin-top: 5px;
		}

		.org-col ul {
			list-style: none;
			font-size: 14px;
			line-height: 1.5;
			color: #222;
		}

		.org-col ul li {
			position: relative;
			padding-left: 20px;
			margin-bottom: 6px;
		}

		.org-col ul li::before {
			content: "•";
			position: absolute;
			left: 4px;
			color: #000;
		}

		/* Нижняя часть (Фраза + Кнопка) */
		.org-bottom {
			margin-top: auto;
			/* Прижимает этот блок к самому низу карточки */
			display: flex;
			flex-direction: column;
			align-items: center;
			gap: 20px;
			padding-top: 10px;
		}

		.org-bottom-text {
			font-size: 16px;
			font-weight: 700;
			text-transform: uppercase;
			color: #000;
			text-align: center;
		}

		.org-btn {
			background-color: #f5da9d;
			/* Желтая кнопка */
			color: #000;
			text-decoration: none;
			text-align: center;
			padding: 14px 40px;
			border-radius: 30px;
			font-weight: 600;
			font-size: 15px;
			transition: opacity 0.2s;
			cursor: pointer;
			border: none;
			min-width: 240px;
		}

		.org-btn:hover {
			opacity: 0.9;
		}

		/* Адаптивность для телефонов */
		@media (max-width: 768px) {
			.org-wrapper {
				flex-direction: column;
			}

			.org-logo-box {
				width: 100%;
				flex: none;
				min-height: 200px;
			}

			.org-grid {
				grid-template-columns: 1fr;
				gap: 20px;
			}

			.org-btn {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<main>
		<!-- ===================== HERO ===================== -->
		<section class="hero">
			<div class="container hero__content">
				<h1 class="hero__title">БИЗНЕСУ И ГРАЖДАНАМ<br>НАДЕЖНАЯ ПРАВОВАЯ ЗАЩИТА</h1>
				<div class="hero__actions">
					<button class="btn btn-primary">Юристы и спициалисты</button>
					<button class="btn btn-primary">Эксперты-партнёры</button>
				</div>
			</div>
		</section>

		<!-- ===================== ABOUT ===================== -->
		<section class="about">
			<div class="container">
				<h2 class="about__title">БИЗНЕС ИДЁТ — ДОКУМЕНТЫ ПОД ЗАЩИТОЙ</h2>
				<br>
				<div class="about__text">
					<p>
						Если у вас своё дело, в том числе в энергетике или смежной сфере, вопросы с подключениями, договорами энергоснабжения или исками от сетевых компаний неизбежны. Чтобы не гадать, почему пришёл счёт на миллион или сорвался договор технологического присоединения, проще сразу работать с профильным юристом. Мы берём на себя всё, что связано с правом в сфере энергетики, чтобы вы спокойно развивали проекты.
					</p>
					<p>
						<b>Ошибка в документах на техприсоединение — и вы теряете миллионы</b><br>
						Многие предприниматели и владельцы участков, домов, помещений сталкиваются с ситуацией: подписали договор с сетевой, не проверили расчёты — и получили необоснованные начисления или сорванные сроки.Имеют место быть ситуации, когда остались без долгожданного электричества / воды / тепла из-за формальной о шибки в заявке. Мы помогаем избежать таких потерь.
					</p>
					<p>
						Юрист-энергетик — это ваша защита от штрафов, переплат и бездействия монополистов.
					</p>
					<p>
						<b>Профессиональная правовая поддержка в сфере энергетики.</b><br>
						Юрист, который разбирается в электричестве и сетях не понаслышке — это ключевое преимущество в спорах с энергокомпаниями.
						Мы обеспечиваем сопровождение любой сложности: от анализа договора техприсоединения до защиты в арбитражном суде.
						Сотрудничая с нами, вы получаете партнёра с уникальной квалификацией, который понимает и техническую, и юридическую сторону дела и берёт на себя все риски взаимодействия с монополистами.

					</p>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="team-container">

					<!-- ==================== ПЕРВЫЙ СПЕЦИАЛИСТ ==================== -->
					<div class="person-wrapper">
						<div class="sidebar">
							<div class="avatar-wrapper">
								<img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Илья Андреевич">
							</div>
							<div class="profile-name">КОВАЛЕНКО<br>ИЛЬЯ АНДРЕЕВИЧ</div>
							<div class="profile-title">Юрист - энергетик, эксперт по энергетике и ЖКХ.</div>
							<div class="profile-expertise">
								Энергетическое право; Споры с РСО; Технологическое присоединение; Коммунальные платежи; Договоры энергоснабжения; Представительство в суде; Аудит сетевых организаций; Техническая экспертиза; Качество коммунальных услуг.
							</div>
						</div>

						<div class="main-card">
							<div class="info-grid">
								<div class="info-section">
									<h3>ОСНОВНЫЕ НАПРАВЛЕНИЯ РАБОТЫ:</h3>
									<ul>
										<li>Ресурсоснабжающие организации (электросетевые, энергосбытовые);</li>
										<li>Технологическое присоединение;</li>
										<li>Начисление платы за коммунальные ресурсы;</li>
										<li>Составление документов и сопровождение договоров;</li>
										<li>Представительство в судах и РСО;</li>
										<li>Договор: Протокол разногласий, ТСО, СТСО;</li>
										<li>Аудит деятельности сетевых организаций;</li>
										<li>Независимая судебная техническая экспертиза;</li>
										<li>Заключение специалиста по качеству услуг.</li>
									</ul>
								</div>

								<div class="info-section">
									<div class="education-block">
										<h3>ОБРАЗОВАНИЕ:</h3>
										<div class="education-item"><span>Среднее специальное</span><span>энергетика</span></div>
										<div class="education-item"><span>Высшее</span><span>энергетика</span></div>
										<div class="education-item"><span>Высшее</span><span>юриспруденция</span></div>
										<div class="education-item"><span>Диплом эксперта</span><span>Энергетики и ЖКХ</span></div>
									</div>

									<div class="experience-block" style="margin-top: 25px;">
										<h3>ОПЫТ РАБОТЫ:</h3>
										<div class="experience-title">Стаж работы по направлению 11 лет</div>

										<div class="job-item">
											<span class="job-dates">Декабрь 2016 – май 2018</span>
											<div class="job-desc">Начальник участка транспорта электроэнергии филиал ПАО «МРСК Сибири» – «Красноярскэнерго»</div>
										</div>

										<div class="job-item">
											<span class="job-dates">Май 2018 – Октябрь 2018</span>
											<div class="job-desc">Начальник управления развития и реализации услуг филиал ПАО «МРСК Сибири» – «Красноярскэнерго»</div>
										</div>

										<a href="#" class="career-link">Подробнее о карьере</a>
									</div>
								</div>
							</div>

							<div class="actions-row">
								<button class="btn">Заказать консультацию</button>
								<button class="btn">Стоимость услуг</button>
								<button class="btn">Судебные дела</button>
							</div>
						</div>
					</div>


					<!-- ==================== ВТОРОЙ СПЕЦИАЛИСТ ==================== -->
					<div class="person-wrapper">
						<div class="sidebar">
							<div class="avatar-wrapper">
								<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" alt="Анна Петрова">
							</div>
							<div class="profile-name">ПЕТРОВА<br>АННА СЕРГЕЕВНА</div>
							<div class="profile-title">Эксперт по энергоаудиту, энергосбережению и экологии.</div>
							<div class="profile-expertise">
								Энергетический аудит; Программы энергосбережения; Энергетические паспорта; Тепловизионное обследование; Системы учета; Энергоэффективность; Экологическая отчетность; Консультирование по нормативам.
							</div>
						</div>

						<div class="main-card">
							<div class="info-grid">
								<div class="info-section">
									<h3>ОСНОВНЫЕ НАПРАВЛЕНИЯ РАБОТЫ:</h3>
									<ul>
										<li>Энергоаудит промышленных предприятий;</li>
										<li>Тепловизионное обследование зданий и сооружений;</li>
										<li>Разработка энергетических паспортов и деклараций;</li>
										<li>Проверка эффективности теплоизоляции и узлов учета;</li>
										<li>Оценка потерь в тепловых и электрических сетях;</li>
										<li>Экспертиза приборов учета (теплосчетчики, расходомеры);</li>
										<li>Сопровождение проверок Ростехнадзора;</li>
										<li>Повышение энергоэффективности оборудования.</li>
									</ul>
								</div>

								<div class="info-section">
									<div class="education-block">
										<h3>ОБРАЗОВАНИЕ:</h3>
										<div class="education-item"><span>Высшее</span><span>Теплоэнергетика</span></div>
										<div class="education-item"><span>Высшее</span><span>Экономика предприятий</span></div>
										<div class="education-item"><span>Переподготовка</span><span>Энергоаудит</span></div>
										<div class="education-item"><span>Диплом эксперта</span><span>Энергоэффективность</span></div>
									</div>

									<div class="experience-block" style="margin-top: 25px;">
										<h3>ОПЫТ РАБОТЫ:</h3>
										<div class="experience-title">Стаж работы по направлению 9 лет</div>

										<div class="job-item">
											<span class="job-dates">Август 2015 – Сентябрь 2018</span>
											<div class="job-desc">Инженер по энергоаудиту в ООО "ЭнергоПроект" (г. Новосибирск)</div>
										</div>

										<div class="job-item">
											<span class="job-dates">Октябрь 2018 – Декабрь 2022</span>
											<div class="job-desc">Руководитель отдела энергосбережения и аудита в ООО "ЭнергоСтандарт"</div>
										</div>

										<a href="#" class="career-link">Подробнее о карьере</a>
									</div>
								</div>
							</div>

							<div class="actions-row">
								<button class="btn">Заказать консультацию</button>
								<button class="btn">Стоимость услуг</button>
								<button class="btn">Примеры паспортов</button>
							</div>
						</div>
					</div>


					<!-- ==================== ТРЕТИЙ СПЕЦИАЛИСТ ==================== -->
					<div class="person-wrapper">
						<div class="sidebar">
							<div class="avatar-wrapper">
								<img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Дмитрий Сидоров">
							</div>
							<div class="profile-name">СИДОРОВ<br>ДМИТРИЙ АЛЕКСАНДРОВИЧ</div>
							<div class="profile-title">Инженер-электрик, специалист по электроснабжению и ПУЭ.</div>
							<div class="profile-expertise">
								Проектирование сетей; Техническое присоединение; ПУЭ и ПТЭЭП; Настройка РЗА; Испытания оборудования; Монтаж ВЛ и КЛ; Составление однолинейных схем; Аварийно-восстановительные работы.
							</div>
						</div>

						<div class="main-card">
							<div class="info-grid">
								<div class="info-section">
									<h3>ОСНОВНЫЕ НАПРАВЛЕНИЯ РАБОТЫ:</h3>
									<ul>
										<li>Проведение испытаний и измерений электрооборудования;</li>
										<li>Балансовая принадлежность и эксплуатационная ответственность;</li>
										<li>Пусконаладочные работы подстанций 0,4 – 10 кВ;</li>
										<li>Составление актов разграничения балансовой принадлежности;</li>
										<li>Проектирование и реконструкция электрических сетей;</li>
										<li>Защита от перенапряжений и системы заземления;</li>
										<li>Расчеты токов короткого замыкания и выбор аппаратуры;</li>
										<li>Технический надзор за монтажом сетей.</li>
									</ul>
								</div>

								<div class="info-section">
									<div class="education-block">
										<h3>ОБРАЗОВАНИЕ:</h3>
										<div class="education-item"><span>Высшее</span><span>Электроснабжение пром. предприятий</span></div>
										<div class="education-item"><span>Высшее</span><span>Промышленная безопасность</span></div>
										<div class="education-item"><span>Проф. переподготовка</span><span>ПУЭ и ТКП</span></div>
										<div class="education-item"><span>Диплом эксперта</span><span>Электроустановки до и выше 1000В</span></div>
									</div>

									<div class="experience-block" style="margin-top: 25px;">
										<h3>ОПЫТ РАБОТЫ:</h3>
										<div class="experience-title">Стаж работы по направлению 14 лет</div>

										<div class="job-item">
											<span class="job-dates">Июнь 2010 – Июнь 2015</span>
											<div class="job-desc">Инженер-электрик в службе сетей ПАО "Россети" (г. Красноярск)</div>
										</div>

										<div class="job-item">
											<span class="job-dates">Июль 2015 – Май 2020</span>
											<div class="job-desc">Главный энергетик на заводе "Электротехника" (г. Екатеринбург)</div>
										</div>

										<a href="#" class="career-link">Подробнее о карьере</a>
									</div>
								</div>
							</div>

							<div class="actions-row">
								<button class="btn">Заказать консультацию</button>
								<button class="btn">Стоимость услуг</button>
								<button class="btn">Выполненные проекты</button>
							</div>
						</div>
					</div>

				</div>
			</div>

		</section>
		<section>
			<div class="container">
				<h1 class="index-h1">ЭКСПЕРТЫ, С КОТОРЫМИ РАБОТАЕТ "ЭНЕРГОПРАВОВЕД"</h1>
				<div class="org-wrapper">
					<!-- Левая часть с логотипом -->
					<div class="org-logo-box">
						<!-- Если у вас есть логотип картинкой, используйте тег img. 
             Например: <img src="path/to/logo.png" alt="РСТ"> -->
						<div class="org-logo-placeholder">
							<div class="big-text">РСТ</div>
							<div class="small-text">К Р А С Н О Я Р С К И Й &nbsp; Ц С М</div>
						</div>
					</div>

					<!-- Правая часть с информацией -->
					<div class="org-info-box">
						<div class="org-heading">
							ФЕДЕРАЛЬНОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ ГОСУДАРСТВЕННЫЙ РЕГИОНАЛЬНЫЙ ЦЕНТР СТАНДАРТИЗАЦИИ, МЕТРОЛОГИИ И ИСПЫТАНИЙ В КРАСНОЯРСКОМ КРАЕ, РЕСПУБЛИКЕ ХАКАСИЯ И РЕСПУБЛИКЕ ТЫВА
						</div>

						<div class="org-grid">
							<!-- Первый филиал -->
							<div class="org-col">
								<h4>ЦЕНТРАЛЬНОЕ ОТДЕЛЕНИЕ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ КРАСНОЯРСК</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Судебная техническая экспертиза;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>

							<!-- Второй филиал -->
							<div class="org-col">
								<h4>ХАКАССКИЙ ФИЛИАЛ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ АБАКАН</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>
						</div>

						<!-- Нижний блок с текстом и кнопкой -->
						<div class="org-bottom">
							<div class="org-bottom-text">ПОМОЖЕМ ПРАВИЛЬНО СОСТАВИТЬ ВОПРОСЫ ДЛЯ ЭКСПЕРТА</div>
							<button class="org-btn">Заказать консультацию</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="org-wrapper">
					<!-- Левая часть с логотипом -->
					<div class="org-logo-box">
						<!-- Если у вас есть логотип картинкой, используйте тег img. 
             Например: <img src="path/to/logo.png" alt="РСТ"> -->
						<div class="org-logo-placeholder">
							<div class="big-text">РСТ</div>
							<div class="small-text">К Р А С Н О Я Р С К И Й &nbsp; Ц С М</div>
						</div>
					</div>

					<!-- Правая часть с информацией -->
					<div class="org-info-box">
						<div class="org-heading">
							ФЕДЕРАЛЬНОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ ГОСУДАРСТВЕННЫЙ РЕГИОНАЛЬНЫЙ ЦЕНТР СТАНДАРТИЗАЦИИ, МЕТРОЛОГИИ И ИСПЫТАНИЙ В КРАСНОЯРСКОМ КРАЕ, РЕСПУБЛИКЕ ХАКАСИЯ И РЕСПУБЛИКЕ ТЫВА
						</div>

						<div class="org-grid">
							<!-- Первый филиал -->
							<div class="org-col">
								<h4>ЦЕНТРАЛЬНОЕ ОТДЕЛЕНИЕ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ КРАСНОЯРСК</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Судебная техническая экспертиза;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>

							<!-- Второй филиал -->
							<div class="org-col">
								<h4>ХАКАССКИЙ ФИЛИАЛ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ АБАКАН</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>
						</div>

						<!-- Нижний блок с текстом и кнопкой -->
						<div class="org-bottom">
							<div class="org-bottom-text">ПОМОЖЕМ ПРАВИЛЬНО СОСТАВИТЬ ВОПРОСЫ ДЛЯ ЭКСПЕРТА</div>
							<button class="org-btn">Заказать консультацию</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="org-wrapper">
					<!-- Левая часть с логотипом -->
					<div class="org-logo-box">
						<!-- Если у вас есть логотип картинкой, используйте тег img. 
             Например: <img src="path/to/logo.png" alt="РСТ"> -->
						<div class="org-logo-placeholder">
							<div class="big-text">РСТ</div>
							<div class="small-text">К Р А С Н О Я Р С К И Й &nbsp; Ц С М</div>
						</div>
					</div>

					<!-- Правая часть с информацией -->
					<div class="org-info-box">
						<div class="org-heading">
							ФЕДЕРАЛЬНОЕ БЮДЖЕТНОЕ УЧРЕЖДЕНИЕ ГОСУДАРСТВЕННЫЙ РЕГИОНАЛЬНЫЙ ЦЕНТР СТАНДАРТИЗАЦИИ, МЕТРОЛОГИИ И ИСПЫТАНИЙ В КРАСНОЯРСКОМ КРАЕ, РЕСПУБЛИКЕ ХАКАСИЯ И РЕСПУБЛИКЕ ТЫВА
						</div>

						<div class="org-grid">
							<!-- Первый филиал -->
							<div class="org-col">
								<h4>ЦЕНТРАЛЬНОЕ ОТДЕЛЕНИЕ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ КРАСНОЯРСК</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Судебная техническая экспертиза;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>

							<!-- Второй филиал -->
							<div class="org-col">
								<h4>ХАКАССКИЙ ФИЛИАЛ ФБУ "КРАСНОЯРСКИЙ ЦСМ" В ГОРОДЕ АБАКАН</h4>
								<h5>ОСНОВНЫЕ НАПРАВЛЕНИЯ ЭКСПЕРТИЗ:</h5>
								<ul>
									<li>Экспертиза приборов учёта электрической энергии;</li>
									<li>Поверка приборов учёта и оборудования</li>
								</ul>
							</div>
						</div>

						<!-- Нижний блок с текстом и кнопкой -->
						<div class="org-bottom">
							<div class="org-bottom-text">ПОМОЖЕМ ПРАВИЛЬНО СОСТАВИТЬ ВОПРОСЫ ДЛЯ ЭКСПЕРТА</div>
							<button class="org-btn">Заказать консультацию</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ===================== REGIONS ===================== -->
		<section class="regions">
			<div class="container">
				<h2 class="section-title">РЕГИОНЫ, В КОТОРЫХ НАС ВЫБИРАЮТ</h2>
				<p>Работаем по всему Красноярскому краю и Республике Хакасия — от столиц до малых поселений</p>
				<div class="regions__grid">
					<div class="regions__col">
						<h3>РЕСПУБЛИКА ХАКАСИЯ</h3>
						<p><b>Городские округа</b></p>
						<p>Абакан, Абаза, Саяногорск, Сорск, Черногорск</p>
						<br>
						<p><b>Муниципальные районы</b></p>
						<ul>
							<li>Муниципальные районы</li>
							<li>Алтайский (с. Белый Яр)</li>
							<li>Аскизский (с. Аскиз)</li>
							<li>Бейский (с. Бея)</li>
							<li>Боградский (с. Боград)</li>
							<li>Орджоникидзевский (п. Копьёво)</li>
							<li>Таштыпский (с. Таштып)</li>
							<li>Усть-Абаканский (пгт Усть-Абакан)</li>
							<li>Ширинский (с. Шира)</li>
						</ul>
						<br>
						<p><b>Крупные сёла и ПГТ</b></p>
						<p>Усть-Абакан, Белый Яр, Аскиз, Бея, Таштып, Шира, Копьёво, Боград, Майна, Черёмушки, Пригорск, Вершина Тёи, Бискамжа.
							В том числе все населённые пункты в составе районов.</p>

					</div>
					<div class="regions__col">
						<h3>КРАСНОЯРСКИЙ КРАЙ</h3>
						<p><b>Городские округа (центры)</b></p>
						<p>Красноярск, Ачинск, Боготол, Бородино, Дивногорск, Енисейск, Канск, Лесосибирск, Минусинск, Назарово, Норильск, Сосновоборск, Шарыпово, Железногорск (ЗАТО), Зеленогорск (ЗАТО), Солнечный (ЗАТО).</p>
						<br>
						<p><b>Муниципальные районы (выборочно)</b></p>
						<p>Абанский, Ачинский, Балахтинский, Берёзовский, Бирилюсский, Боготольский, Богучанский, Большеулуйский, Большемуртинский, Дзержинский, Емельяновский, Енисейский, Ермаковский, Идринский, Иланский, Ирбейский, Казачинский, Канский, Каратузский, Кежемский, Козульский, Краснинский, Курагинский, Манский, Минусинский, Мотыгинский, Назаровский, Нижнеингашский, Новосёловский, Партизанский, Пировский, Рыбинский, Саянский, Северо-Енисейский, Сухобузимский, Тасеевский, Туруханский, Тюхтетский, Ужурский, Уярский, Шарыповский, Шушенский.</p>
						<br>
						<p>Включая все населённые пункты и ЗАТО..</p>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>

</html>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>