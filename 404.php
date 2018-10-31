<?php $page_title = 'Страница не найдена'; ?>
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
		<div class="inner-page-wrapper page-404">
			<div class="section page-404-section">
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
					<div class="page-404-content">
						<div class="image">
							<img src="img/404.png" alt="">
						</div>
						<p>Ой, тут должна была быть страница, <br>но что-то пошло не так</p>
						<div class="flex-center">
							<a href="index.php" class="btn small-radius">Вернуться на главную</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>