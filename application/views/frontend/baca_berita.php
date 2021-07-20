<?php
include 'komponen/header.php';
include 'komponen/navbar.php'
?>

<!-- Konten -->

<section class="page-header bg_img padding-tb">
		<div class="overlay"></div>
		<div class="container">
			<div class="page-header-content-area">
				<h4 class="ph-title"><?= $berita['judul']?></h4>
				<ul class="lab-ul">
					<li><a href="<?= base_url()?>">Home</a></li>
					<li><a class="active">Baca Berita</a></li>
				</ul>
			</div>
		</div>
	</section>

	<div class="blog-section blog-page padding-tb aside-bg">
		<div class="container">
			<div class="section-wrapper">
				<div class="row justify-content-center pb-15">
					<div class="col-lg-8 col-12">
						<article>
							<div class="post-item-2">
								<div class="post-inner">
									<div class="post-thumb">
										<img src="<?= base_url()?>uploads/blog/<?= $berita['foto']?>" alt="blog">
									</div>
									<div class="post-content">
										<h3><?= $berita['judul']?></h3>
										<ul class="lab-ul post-date">
											<li><span><i class="icofont-ui-calendar"></i> <?= $berita['createat']?>
												</span></li>
											<li><span><i class="icofont-user"></i><a href="#">Robot Smith</a></span>
											</li>
											
										</ul>
										<?= $berita['konten']?>

										<div class="tags-area">
											
											<ul class="share lab-ul justify-content-center">
												<li>
													<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href="#" class="dribble"><i class="fab fa-dribbble"></i></a>
												</li>
												<li>
													<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<div class="authors">
								<div class="author-thumb">
									<img src="assets/images/blog/author2.png" alt="author">
								</div>
								<div class="author-content">
									<h6>Rassel Hossain</h6>
									<p>Competently conceptualize alternative synergy and technically and niche
										markets. Efficiently impact technically sound outsourcing rath
										tnclicks-and-mortar best practices.</p>
									<div class="social-media">
										<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
										<a href="#" class="behance"><i class="icofont-behance"></i></a>
										<a href="#" class="instagram"><i class="icofont-instagram"></i></a>
										<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
										<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
									</div>
								</div>
							</div>

							

						</article>
					</div>
					<div class="col-lg-4 col-md-7 col-12">
						<aside class="ps-lg-4 mt-5 mt-lg-0 pt-1 pt-lg-0">
							<div class="widget widget-search">
								<div class="widget-header">
									<h5>Search Your keywords</h5>
								</div>
								<form action="http://labartisan.net/" class="search-wrapper">
									<input type="text" name="s" placeholder="Search Here...">
									<button type="submit"><i class="icofont-search-2"></i></button>
								</form>
							</div>

							<div class="widget widget-category">
								<div class="widget-header">
									<h5>Post Categories</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Show
												all</span><span>18</span></a>
									</li>

									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Business</span><span>20</span></a>
									</li>
									
							</div>

							<div class="widget widget-post">
								<div class="widget-header">
									<h5>Recent Post</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/product/01.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Poor People’s Campaign
													Our Resources</h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									
								</ul>
							</div>

							<div class="widget widget-instagram">
								<div class="widget-header">
									<h5>Instagram</h5>
								</div>
								<ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
									<li><a href="#"><img src="assets/images/gallery/01.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/02.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/03.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/04.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/05.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/06.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/07.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/08.jpg" alt="gallery-img"></a></li>
									<li><a href="#"><img src="assets/images/gallery/09.jpg" alt="gallery-img"></a></li>
								</ul>
							</div>

							<div class="widget widget-archive">
								<div class="widget-header">
									<h5>Our Archive</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>January</span><span>2021</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>February</span><span>2021</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>March</span><span>2019</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>August</span><span>2018</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>September</span><span>2017</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>October</span><span>2016</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>November</span><span>2014</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-ui-calendar"></i>December</span><span>2013</span></a>
									</li>
								</ul>
							</div>

							<div class="widget widget-tags">
								<div class="widget-header">
									<h5>Our Popular tags</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li><a href="#">envato</a></li>
									<li><a href="#">themeforest</a></li>
									<li><a href="#">codecanyon</a></li>
									<li><a href="#">videohive</a></li>
									<li><a href="#">audiojungle</a></li>
									<li><a href="#">3docean</a></li>
									<li><a href="#">envato</a></li>
									<li><a href="#">themeforest</a></li>
									<li><a href="#">codecanyon</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include 'komponen/footer.php' ?>
