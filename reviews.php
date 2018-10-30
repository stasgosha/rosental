<?php $page_title = 'Отзывы'; ?>
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
		<div class="inner-page-wrapper reviews-page">
			<div class="section">
				<div class="container">
					<h1 class="ros-h1">Отзывы клиентов о системе «Паук»</h1><!-- the_title() -->
					<div class="row">
						<!-- ↓↓↓ WP loop goes here ↓↓↓ -->
						<?php for ($i=0; $i < 5; $i++): ?>
							<div class="col-md-6 margin-bottom-big">
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
										<div class="d-flex justify-content-start justify-content-sm-end">
											<a href="#" target="_blank" class="view-more">
												<i class="icon icon-document-check"></i>
												<span>Смотреть оригинал отзыва</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>