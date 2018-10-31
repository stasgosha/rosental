<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $page_title ?> - Розенталь Групп</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
	<link rel="stylesheet" href="css/odometer-theme-minimal.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
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
									<div class="header-phone-xs d-sm-none">
										<i class="icon icon-phone-big"></i>
										<a href="tel:84212467700">8 (4212) 46-77-00</a>
									</div>
									<div class="logo-descr">
										<h4 class="ros-body-1">Автоматизация управляющих компаний в сфере ЖКХ</h4>
									</div>
								</div>
							</div>
							<div class="header-block center d-none d-md-flex">
								<div class="header-phone-block">
									<div class="phone-note">Бесплатно по РФ</div>
									<a class="tel-link" href="tel:84212467700">8 (4212) 46-77-00</a>
								</div>
							</div>
							<div class="header-block right d-none d-sm-flex">
								<div class="flex-container align-center">
									<button class="btn margin-bottom-tiny lg-margin-bottom-no lg-margin-right-tiny" data-toggle="modal" data-target="#modal-request">Заказать звонок</button>
									<a href="mailto:uk@rozentalgroup.ru" target="_blank" class="btn btn-light color-white">Написать письмо</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-line">
					<div class="container">
						<div class="menu-opener d-md-none">
							<div class="opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
							<span>Меню</span>
						</div>
						<ul class="top-nav d-none d-md-flex">
							<li><a href="about.php">ГК «Розенталь Групп»</a></li>
							<li>
								<a href="products.php">Продукты и услуги для УК</a>
								<ul class="submenu">
									<li><a href="dispatcher.php">Электронный диспетчер</a></li>
									<li><a href="mobile-app.php">Мобильное приложение</a></li>
									<li><a href="site.php">Сайт для УК</a></li>
									<li><a href="site-2.php">Сайт для УК - 2</a></li>
								</ul>
							</li>
							<li>
								<a href="support.php">Техническая поддержка</a>
								<ul class="submenu">
									<li><a href="reviews.php">Отзывы</a></li>
									<li><a href="documents.php">Документы</a></li>
								</ul>
							</li>
							<li><a href="faq.php">Вопросы и ответы</a></li>
							<li><a href="clients.php">Клиенты</a></li>
							<li><a href="contacts.php">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>