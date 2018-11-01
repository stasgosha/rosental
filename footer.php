		</div>
		<div class="footer">
			<div class="footer-row">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3 margin-bottom-big lg-margin-bottom-no">
							<h4 class="ros-h4 color-white">Продукты и услуги</h4>
							<ul class="footer-nav">
								<li><a href="dispatcher.php">Электронный диспетчер</a></li>
								<li><a href="mobile-app.php">Мобильное приложение</a></li>
								<li><a href="site.php">Сайт для УК</a></li>
								<li><a href="site-2.php">Сайт для УК - 2</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3 margin-bottom-big lg-margin-bottom-no">
							<h4 class="ros-h4 color-white">Розенталь Групп</h4>
							<ul class="footer-nav">
								<li><a href="about.php">О Компании</a></li>
								<li><a href="documents.php">Документы</a></li>
								<li><a href="reviews.php">Отзывы</a></li>
								<li><a href="404.php">Страница 404</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3 margin-bottom-big sm-margin-bottom-no">
							<h4 class="ros-h4 color-white">Информация</h4>
							<ul class="footer-nav">
								<li><a href="clients.php">Клиенты</a></li>
								<li><a href="faq.php">Вопрос-ответ</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-lg-3">
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
						<div class="col-md-3 margin-bottom-large md-margin-no">
							<div class="copyright">Все права защищены <br>© ГК «Розенталь Групп» <?= date('Y') ?></div>
						</div>
						<div class="col-md-6 margin-bottom-large md-margin-no">
							<div class="d-flex justify-content-start justify-content-md-center">
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
								<a href="//webolution.ru/" class="webolution" target="_blank">
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
	<nav id="menu" class="panel">
		<div class="panel-inner">
			<div class="panel-content"></div>
			<ul class="panel-nav">
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
						<li><a href="404.php">Страница 404</a></li>
					</ul>
				</li>
				<li><a href="faq.php">Вопросы и ответы</a></li>
				<li><a href="clients.php">Клиенты</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
		</div>
	</nav>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-request">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<div class="ros-h3 text-center">Заявка</div>
					<form action="#" class="form">
						<div class="request-form">
							<div class="form-row">
								<input type="text" class="input-field" placeholder="Ваше имя">
							</div>
							<div class="form-row">
								<input type="tel" class="input-field" placeholder="Телефон">
							</div>
							<div class="form-row">
								<input type="email" class="input-field" placeholder="E-mail">
							</div>
							<div class="form-row">
								<textarea class="textarea" placeholder="Комментарий"></textarea>
							</div>
						</div>
						<div class="flex-center margin-top-small">
							<button class="btn fullwidth">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
	<script defer src="js/bootstrap.bundle.min.js"></script>
	<script defer src="js/odometer.min.js"></script>
	<script defer src="js/tilt.min.js"></script>
	<script defer src="js/bigSlide.min.js"></script>
	<script defer src="js/scripts.min.js"></script>
	<?php // wp_footer(); ?>
</body>
</html>