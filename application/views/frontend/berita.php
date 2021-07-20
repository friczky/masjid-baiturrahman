<?php
include 'komponen/header.php';
include 'komponen/navbar.php'
?>

<!-- Konten -->

<section class="page-header bg_img padding-tb">
		<div class="overlay"></div>
		<div class="container">
			<div class="page-header-content-area">
				<h4 class="ph-title">Berita Masjid Baiturrahman</h4>
				<ul class="lab-ul">
					<li><a href="<?= base_url()?>">Home</a></li>
					<li><a class="active">Berita</a></li>
				</ul>
			</div>
		</div>
	</section>

	<div class="blog-section blog-page padding-tb aside-bg">
		<div class="container">
			<div class="section-wrapper">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-12">
						<article>
							<?php foreach ($berita->result() as $berita) {?>
							<div class="post-item-2">
								<div class="post-inner">
									<div class="post-thumb">
										<a href="<?= base_url()?>berita/<?= $berita->slug?>">
											<img src="<?= base_url()?>uploads/blog/<?= $berita->foto?>" alt="blog">
										</a>
									</div>
									<div class="post-content">
										<a href="<?= base_url()?>berita/<?= $berita->slug?>">
											<h3><?= $berita->judul?></h3>
										</a>
										<ul class="lab-ul post-date">
											<li><span><i class="icofont-ui-calendar"></i> October 9, 2019 10:59 am
												</span></li>
											<li><span><i class="icofont-user"></i><a href="#">Robot Smith</a></span>
											</li>
											<li><span><i class="icofont-speech-comments"></i><a href="#">09
														Comments</a></span></li>
										</ul>
										<p><?= substr($berita->konten,0,100) ?></p>
										<a href="<?= base_url()?>berita/<?= $berita->slug?>" class="lab-btn">Read More</a>
									</div>
								</div>
							</div>
							<?php }?>
							<div class="paginations">
								<ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
									<li>
										<a href="#"><i class="icofont-rounded-double-left"></i></a>
									</li>
									<li>
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li class="d-none d-sm-block">
										<a href="#">3</a>
									</li>
									<li>
										<a href="#"><i class="icofont-rounded-double-right"></i></a>
									</li>
								</ul>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-7 col-12">
						<aside class="ps-lg-4">
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
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Creative</span><span>25</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Inspiation</span><span>30</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>News</span><span>28</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Photography</span><span>20</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-rounded-double-right"></i>Smart</span><span>26</span></a>
									</li>
								</ul>
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
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/product/02.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Boosting Social For NGO
													And Charities </h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/product/03.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Poor People’s Campaign
													Our Resources</h6>
											</a>
											<p>04 February 2019</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/product/04.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Boosting Social For NGO
													And Charities </h6>
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
