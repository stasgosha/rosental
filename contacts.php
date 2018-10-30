<?php $page_title = 'Контакты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</div>
		<div class="inner-page-wrapper contacts-page">
			<div class="section">
				<div class="container">
					<div class="post-content ros-typography lg-padding-right-big">
						<h1>Контакты</h1><!-- the_title() -->
						<!-- ↓↓↓ Page text goes here ↓↓↓ -->
						<div class="row flex-column-reverse flex-lg-row">
							<div class="col-lg-6">
								<!-- <?php // the_content() ?> -->
								<a class="tel-link" href="tel:84212467700">8 (4212) 46-77-00</a>
								<p>Бесплатный звонок по России</p>
								<p>E-mail: <a href="mailto:uk@rozentalgroup.ru">uk@rozentalgroup.ru</a></p>
								<p>ООО «Розенталь Групп «Сириус»</p>
								<p>Юридический адрес: 680000 г. Хабаровск, ул. Ким Ю Чена д.1 кв.76</p>
								<p>Почтовый адрес: 680000 г. Хабаровск, ул. Ким Ю Чена д.1 кв.76</p>
								<p>ИНН/КПП 2724220371/272401001</p>
								<p>Р/с - 40702810570000006837</p>
								<p>Дальневосточный банк ПАО "Сбербанк России"</p>
								<p>К/с - 30101810600000000608</p>
								<p>БИК 040813608</p>
							</div>
							<div class="col-lg-6">
								<div class="map-block margin-bottom-large lg-margin-no">
									<iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A162051a62e5c0a44904eef334183085faaffc52beb7f011654bb96eafcea8629&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>