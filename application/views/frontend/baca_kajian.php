<?php
include 'komponen/header.php';
include 'komponen/navbar.php'
?>

<!-- Konten -->

<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title"><?= $kajian['nama']?></h4>
                <ul class="lab-ul">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    <li><a class="active">Kajian</a></li>
                </ul>
            </div>
        </div>
    </section>

	<div class="event-single-section padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center pb-10">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="event-single-wrapper">
                            <div class="event-top event-top-2">
                                <div class="event-top-thumb">
                                    <img src="<?= base_url()?>uploads/kajian/<?= $kajian['foto']?>" alt="Upcoming-event">
                                </div>
                                <div class="event-top-content">
                                    <div class="event-top-content-wrapper mb-30">
                                        <ul class="lab-ul event-date mb-4 mb-md-0">
                                            <li><i class="icofont-calendar"></i> <span><?= $kajian['tanggal']?></span></li>
                                            <li><i class="icofont-location-pin"></i> <span><?= $kajian['tempat']?>
                                                    States</span></li>
                                        </ul>
                                      
                                    </div>
                                    <!-- KONTEN -->
										<?= $kajian['deskripsi']?>
                                    <div class="tags-area">
                                       
                                        <!-- <ul class="share lab-ul">
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
                                        </ul> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12">
                        <aside class="lab-aside">
                            <div class="widget widget-event mt-5 mt-lg-0">
                                <div class="widget-header">
                                    <h5>Detail Kajian</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li>
                                        <span><i class="icofont-pen"></i> Judul </span> <span>:
										<?= $kajian['nama']?></span>
                                    </li>
									<li>
                                        <span><i class="icofont-list"></i> Kategori </span> <span>:
										<?= $kajian['kategori']?></span>
                                    </li>
									<li>
                                        <span><i class="icofont-users"></i> Peserta </span> <span>:
										<?= $kajian['peserta']?></span>
                                    </li>
									<li>
                                        <span><i class="icofont-home"></i> Lokasi </span> <span>:
										<?= $kajian['tempat']?></span>
                                    </li>
                                    <li>
                                        <span><i class="icofont-clock-time"></i> Jam </span> <span>: <?= $kajian['jam']?></span>
                                    </li><li>
                                        <span><i class="icofont-ui-calendar"></i> Tanggal </span> <span>:
										<?= $kajian['tanggal']?></span>
                                    </li>
                                   
                                    <li>
                                        <span><i class="icofont-star"></i> Rating </span> <span>: <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></span>
                                    </li>
                                   
                                </ul>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'komponen/footer.php' ?>
