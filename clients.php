<?php $page_title = 'Клиенты'; ?>
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
		<div class="inner-page-wrapper clients-page">
			<div class="section">
				<div class="container">
					<h1 class="ros-h1 text-center">Объекты, на которых мы внедрили систему «Паук»</h1><!-- the_title() -->
					<div class="row margin-bottom-tiny">
						<!-- ↓↓↓ WP loop goes here ↓↓↓ -->
						<?php for ($i=0; $i < 9; $i++): ?>
							<div class="col-sm-6 col-lg-4">
								<div class="clients-card">
									<div class="card-image">
										<img src="http://placeimg.com/515/326/arch?v=<?= $i ?>" alt="">
									</div>
									<div class="card-content">
										<p class="ros-body-1">Москва, ул. Академика Королева, 12</p>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="pagination-wrap">
						<!-- ↓↓↓ Default Pagination Layout ↓↓↓ -->
						<!-- <ul class="pagination">
							<li><a href="#">1</a></li>
							<li class="current"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
						</ul> -->
						<!-- ↓↓↓ WP PageNavi Plagin Layout ↓↓↓ -->
						<div class="wp-pagenavi">
							<a class="first" href="http://blog.aparat.ua/">« Первая</a>
							<a class="previouspostslink" rel="prev" href="http://blog.aparat.ua/page/9/">«</a>
							<span class="extend">...</span>
							<span class="current">1</span>
							<a class="page larger" title="Page 2" href="http://blog.aparat.ua/page/2/">2</a>
							<a class="page larger" title="Page 3" href="http://blog.aparat.ua/page/3/">3</a>
							<a class="page larger" title="Page 4" href="http://blog.aparat.ua/page/4/">4</a>
							<a class="page larger" title="Page 5" href="http://blog.aparat.ua/page/5/">5</a>
							<span class="extend">...</span>
							<a class="larger page" title="Page 10" href="http://blog.aparat.ua/page/10/">10</a>
							<span class="extend">...</span>
							<a class="nextpostslink" rel="next" href="http://blog.aparat.ua/page/2/">»</a>
							<a class="last" href="http://blog.aparat.ua/page/10/">Последняя »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>