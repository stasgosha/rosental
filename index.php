<?php $page_title = 'Главная'; ?>

<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="<?php // bloginfo('language') ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title><?= $page_title ?> - Розенталь Групп</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/odometer-theme-minimal.css">
	<link rel="stylesheet" href="css/main.css?v=<?= rand() ?>"><!-- TODO: remove rand part -->
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<div class="page">
			<div class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-top-inner">
							<div class="header-block left">
								<div class="header-logo-block">
									<a href="index.php" class="logo">
										<img src="img/logo.svg" alt="">
									</a>
									<div class="logo-descr">
										<h4 class="ros-body-1">Автоматизация управляющих компаний в сфере ЖКХ</h4>
									</div>
								</div>
							</div>
							<div class="header-block center">
								<div class="header-phone-block">
									<div class="phone-note">Бесплатно по РФ</div>
									<a class="tel-link" href="tel:84212467700">8 (4212) 46-77-00</a>
								</div>
							</div>
							<div class="header-block right">
								<div class="flex-container align-center">
									<button class="btn margin-right-tiny" data-toggle="modal" data-target="#orderCall">Заказать звонок</button>
									<!-- TODO: change email -->
									<a href="mailto:uk@rozentalgroup.ru" target="_blank" class="btn btn-light color-white">Написать письмо</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-line">
					<div class="container">
						<ul class="top-nav">
							<li><a href="index.php">ГК «Розенталь Групп»</a></li>
							<li class="current-menu-parent">
								<a href="#">Продукты и услуги для УК</a>
								<ul class="submenu">
									<li><a href="#">Электронный диспетчер</a></li>
									<li class="current-menu-item"><a href="#">Мобильное приложение</a></li>
									<li><a href="#">Сайт для УК</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Техническая поддержка</a>
								<ul class="submenu">
									<li><a href="#">Электронный диспетчер</a></li>
									<li class="current-menu-item"><a href="#">Мобильное приложение</a></li>
									<li><a href="#">Сайт для УК</a></li>
								</ul>
							</li>
							<li><a href="#">Вопросы и ответы</a></li>
							<li><a href="#">Клиенты</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-content">
				<div class="section features-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1 class="ros-h1 text-center">Автоматизация ЖКХ</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="features-card">
									<div class="card-image">
										<img src="img/features/building.png" alt="">
										<div class="card-image-icon">
											<i class="icon icon-peoples"></i>
										</div>
									</div>
									<div class="card-content">
										<h5 class="ros-h3">Жители</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам </p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="features-card">
									<div class="card-image">
										<img src="img/features/spider.png" alt="">
										<div class="card-image-icon">
											<i class="icon icon-logo-circle"></i>
										</div>
									</div>
									<div class="card-content">
										<h5 class="ros-h3">Система «Паук»</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам </p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="features-card">
									<div class="card-image">
										<img src="img/features/person.png" alt="">
										<div class="card-image-icon">
											<i class="icon icon-headphones"></i>
										</div>
									</div>
									<div class="card-content">
										<h5 class="ros-h3">Управляющая компания</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section cards-section">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="white-card">
									<div class="card-image">
										<img src="img/cards/headphones.png" alt="">
									</div>
									<div class="card-content">
										<h5 class="card-caption ros-h3">Электронный диспетчер</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn">Бесплатная демо версия</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="white-card">
									<div class="card-image">
										<img src="img/cards/mobile-phones.png" alt="">
									</div>
									<div class="card-content">
										<h5 class="ros-h3">Мобильное <br class="d-none d-xl-inline">приложение</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn">Скачать</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="white-card">
									<div class="card-image">
										<img src="img/cards/imac.png" alt="">
									</div>
									<div class="card-content">
										<h5 class="ros-h3">Сайт управляющией компании</h5>
										<p class="ros-body-1">В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-accent">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cards-bottom-line"></div>
					</div>
				</div>
				<div class="section white-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="about-company-block">
									<div class="block-image">
										<img src="img/common/company.jpg" alt="">
									</div>
									<div class="block-content ros-typography">
										<h2>О Компании</h2>
										<p>В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам небесной механики; как правило, это явление находило объяснение в существовании неизвестного материального тела. Именно так были открыты планета Нептун и звезда Сириус B.</p>
										<p>В 1922 году астрономы Джеймс Джинс и Якобус Каптейн исследовали движение звёзд в нашей Галактике и пришли к выводу, что бо́льшая часть вещества в галактике невидима; в этих работах, вероятно, впервые появился термин «тёмная материя» . Ян Оорт использовал тот же термин в статье 1932 года.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="stats-card">
									<div class="stats-bg">
										<img src="img/stats/clock.png" alt="">
									</div>
									<div class="card-content">
										<div class="stats-value"><span class="odometer" id="odometer-year" data-val="8">3</span> лет</div>
										<p class="ros-body-1 margin-no">успешной работы коммании в сфере ЖКХ</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="stats-card">
									<div class="stats-bg">
										<img src="img/stats/person.png" alt="">
									</div>
									<div class="card-content">
										<div class="stats-value"><span class="odometer" id="odometer-users" data-val="15000"> 10000</span></div>
										<p class="ros-body-1 margin-no">жильцов используют нашу систему</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="stats-card">
									<div class="stats-bg">
										<img src="img/stats/bulb.png" alt="">
									</div>
									<div class="card-content">
										<div class="stats-value">более <span class="odometer" id="odometer-companies" data-val="30">23</span></div>
										<p class="ros-body-1 margin-no">компаний уже внедрили «Паук»</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="stats-card">
									<div class="stats-bg">
										<img src="img/stats/envelope.png" alt="">
									</div>
									<div class="card-content">
										<div class="stats-value"><span class="odometer" id="odometer-meters" data-val="800000">600000</span> м<sup>2</sup></div>
										<p class="ros-body-1 margin-no">обслуживают с помощью наших продуктов</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section opportunities-section">
					<div class="container">
						<h2 class="ros-h2 margin-bottom-medium text-center">Возможности системы</h2>
						<div class="flex-center">
							<div class="tabs-nav">
								<div class="item" data-tab="#forCompanies">Управляющим компаниям</div>
								<div class="item current" data-tab="#forClients">Жителям и клиентам</div>
							</div>
						</div>
						<div class="tabs-container">
							<div class="tab" id="forCompanies">
								<div class="opportunities-block">
									<div class="block-content">
										<ol class="ros-ol half-digits two-columns">
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
										</ol>
									</div>
									<div class="block-image">
										<img src="img/common/opportunities.png" alt="">
									</div>
								</div>
							</div>
							<div class="tab" id="forClients">
								<div class="opportunities-block">
									<div class="block-content">
										<ol class="ros-ol half-digits two-columns">
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
											<li>Возможность передачи обращений в ЖЭК</li>
										</ol>
									</div>
									<div class="block-image">
										<img src="img/common/opportunities.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section try-for-free-section">
					<div class="container">
						<div class="try-for-free-section-inner">
							<!-- try-for-free => tfr -->
							<div class="tfr-text">Попробуйте <span>бесплатно</span></div>
							<div class="tfr-phone">
								<a href="tel:84212467700" class="tfr-phone-icon">
									<i class="icon icon-chat-bubble">
										<i class="icon icon-hand-with-phone"></i>
									</i>
								</a>
								<div class="tfr-phone-text">
									<a class="tel-link" href="tel:84212467700">8 (4212) 46-77-00</a>
									<p class="ros-body-1 margin-no">Хотите попробовать абсолютно бесплатно? <br>Подробности по телефону</p>
								</div>
							</div>
							<div class="tfr-button">
								<button class="btn btn-accent" data-toggle="modal" data-target="#orderCall">Заказать звонок</button>
							</div>
						</div>
					</div>
				</div>
				<div class="section reviews-section">
					<div class="container">
						<h2 class="ros-h2 text-center margin-bottom-big">Отзывы</h2>
						<div class="reviews-slider">
							<div class="slide">
								<div class="review-card">
									<div class="card-header">
										<div class="review-logo">
											<img src="img/partners/partner-logo.png" alt="">
										</div>
										<div class="review-author">
											<p class="ros-body-1 margin-no color-dark"><strong>ГК «Название компании»</strong></p>
											<p class="ros-note">Иван Иванов, директор</p>
										</div>
									</div>
									<div class="card-content ros-typography">
										<p>В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам небесной механики; как правило, это явление находило объяснение в существовании неизвестного материального тела.</p>
									</div>
									<div class="card-footer">
										<div class="flex-right">
											<a href="#" target="_blank" class="view-more">
												<i class="icon icon-document-check"></i>
												<span>Смотреть оригинал отзыва</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="review-card">
									<div class="card-header">
										<div class="review-logo">
											<img src="img/partners/partner-logo.png" alt="">
										</div>
										<div class="review-author">
											<p class="ros-body-1 margin-no color-dark"><strong>ГК «Название компании»</strong></p>
											<p class="ros-note">Иван Иванов, директор</p>
										</div>
									</div>
									<div class="card-content ros-typography">
										<p>В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам небесной механики; как правило, это явление находило объяснение в существовании неизвестного материального тела.</p>
									</div>
									<div class="card-footer">
										<div class="flex-right">
											<a href="#" target="_blank" class="view-more">
												<i class="icon icon-document-check"></i>
												<span>Смотреть оригинал отзыва</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="review-card">
									<div class="card-header">
										<div class="review-logo">
											<img src="img/partners/partner-logo.png" alt="">
										</div>
										<div class="review-author">
											<p class="ros-body-1 margin-no color-dark"><strong>ГК «Название компании»</strong></p>
											<p class="ros-note">Иван Иванов, директор</p>
										</div>
									</div>
									<div class="card-content ros-typography">
										<p>В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам небесной механики; как правило, это явление находило объяснение в существовании неизвестного материального тела.</p>
									</div>
									<div class="card-footer">
										<div class="flex-right">
											<a href="#" target="_blank" class="view-more">
												<i class="icon icon-document-check"></i>
												<span>Смотреть оригинал отзыва</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section spider-network-section">
					<div class="container">
						<h2 class="ros-h2 text-center margin-bottom-medium">«Паук» успешно применяют по всей территории РФ</h2>
					</div>
					<div class="spider-network-map"></div>
				</div>
				<div class="section white-section why-we-section">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="ros-typography padding-right-medium">
									<h2>Зачем автоматизировать управляющую компанию?</h2>
									<p>В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам небесной механики; как правило, это явление находило объяснение в существовании неизвестного  тела.</p>
									<p>Именно так были открыты планета Нептун и звезда Сириус. В 1922 году астрономы Джеймс Джинс и Якобус Каптейн исследовали движение звёзд в нашей Галактике. В истории науки встречались ситуации, когда движение небесных тел не подчинялось законам.</p>
								</div>
							</div>
							<div class="col-md-6">
								<ul class="ros-ul half-markers two-columns padding-top-tiny white-bg">
									<li>Возможность передачи обращений в ЖЭК</li>
									<li>Возможность передачи обращений в ЖЭК</li>
									<li>Возможность передачи обращений в ЖЭК</li>
									<li>Возможность передачи обращений в ЖЭК</li>
									<li>Возможность передачи обращений в ЖЭК</li>
									<li>Возможность передачи обращений в ЖЭК</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section order-demo-section">
					<div class="parallax-layers" id="parallax-viewport" data-friction-x="0.05" data-friction-y="0.05" data-scalar-y="12">
						<div class="parallax-layer layer-1" data-depth="0.3">
							<img src="img/order-demo/figure-1.png" alt="">
						</div>
						<div class="parallax-layer layer-2" data-depth="0.1">
							<img src="img/order-demo/figure-2.png" alt="">
						</div>
						<div class="parallax-layer layer-3" data-depth="0.05">
							<img src="img/order-demo/figure-3.png" alt="">
						</div>
						<div class="parallax-layer layer-4" data-depth="0.25">
							<img src="img/order-demo/figure-4.png" alt="">
						</div>
						<div class="parallax-layer layer-5" data-depth="0.1">
							<img src="img/order-demo/figure-6.png" alt="">
						</div>
						<div class="parallax-layer layer-6" data-depth="0.35">
							<img src="img/order-demo/figure-6.png" alt="">
						</div>
						<div class="parallax-layer layer-7" data-depth="0.05">
							<img src="img/order-demo/figure-7.png" alt="">
						</div>
						<div class="parallax-layer layer-8" data-depth="0.1">
							<img src="img/order-demo/figure-8.png" alt="">
						</div>
					</div>
					<div class="container">
						<div class="order-demo-section-inner">
							<div class="pre-fiedls-text">
								<h2 class="ros-h2">Попробуйте абсолютно бесплатно!</h2>
								<p class="ros-body-1 margin-no">Отправьте нам заявку и мы предоставим Вам демонстрационный доступ в нашу систему!</p>
							</div>
							<form action="" class="form">
								<div class="order-form">
									<div class="form-row">
										<input type="text" class="input-field" placeholder="Ваше имя">
									</div>
									<div class="form-row">
										<input type="tel" class="input-field" placeholder="Телефон">
									</div>
									<div class="form-row">
										<input type="email" class="input-field" placeholder="E-mail">
									</div>
								</div>
								<div class="flex-center">
									<button class="btn btn-big">Получить демо версию <br>бесплатно</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="footer-row">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h4 class="ros-h4 color-white">Продукты и услуги</h4>
							<ul class="footer-nav">
								<li><a href="#">Электронный диспетчер</a></li>
								<li><a href="#">Мобильное приложение</a></li>
								<li><a href="#">Сайт для УК</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h4 class="ros-h4 color-white">Розенталь Групп</h4>
							<ul class="footer-nav">
								<li><a href="#">О Компании</a></li>
								<li><a href="#">Документы</a></li>
								<li><a href="#">Отзывы</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h4 class="ros-h4 color-white">Информация</h4>
							<ul class="footer-nav">
								<li><a href="#">Клиенты</a></li>
								<li><a href="#">Вопрос-ответ</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<a href="index.php" class="footer-logo">
								<img src="img/logo.svg" alt="">
							</a>
							<div class="footer-contacts">
								<div class="item contacts-phone">
									<div class="item-icon">
										<i class="icon icon-phone"></i>
									</div>
									<div class="item-content">
										<a class="tel-link" href="tel:84212467700">8 (4212) 46-77-00</a>
										<p>Бесплатно по России</p>
									</div>
								</div>
								<div class="item contacts-email">
									<div class="item-icon">
										<i class="icon icon-envelope"></i>
									</div>
									<div class="item-content">
										<a href="mailto:uk@rozentalgroup.ru" target="_blank">uk@rozentalgroup.ru</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-row">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-3">
							<div class="copyright">Все права защищены <br>© ГК «Розенталь Групп» 2018</div>
						</div>
						<div class="col-md-6">
							<div class="flex-center">
								<ul class="socials-list">
									<li>
										<a href="#" target="_blank">
											<i class="icon icon-vk"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon icon-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon icon-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="flex-right">
								<a href="https://webolution.ru/" class="webolution" target="_blank">
									<div class="webolution-logo">
										<img src="img/webolution.png" alt="">
									</div>
									<span>Разработка и продвижение</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="js/odometer.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>