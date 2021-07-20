<?php
include 'komponen/header.php';
include 'komponen/navbar.php'
?>

<!-- Konten -->

<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Jadwal Kajian Masjid Baiturrahman</h4>
                <ul class="lab-ul">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    <li><a class="active">Kajian</a></li>
                </ul>
            </div>
        </div>
    </section>
	<section class="event-section padding-tb padding-b shape-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Jadwal Kajian Yang Akan Datang</h5>
                        <h2>Mengecas Iman dan Hati dengan mengaji bersama di Masjid Baiturrahman!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event-content">
                        <div class="event-top tri-shape-2 pattern-2">
                            <div class="event-top-thumb">
                                <img src="<?= base_url()?>uploads/kajian/<?= $kajian1['foto']?>" alt="Upcoming-event">
                            </div>
                            <div class="event-top-content">
                                <div class="event-top-content-wrapper">
                                    <h3><a href="<?= base_url()?>kajian/r/<?= $kajian1['slug']?>"><?= $kajian1['nama']?></a> </h3>
                                    <div class="date-count-wrapper">
                                        <ul class="lab-ul event-date">
                                            <li><i class="icofont-calendar"></i> <span><?= $kajian1['jam']?> , <?= $kajian1['tanggal']?></span></li>
                                            <li><i class="icofont-location-pin"></i> <span><?= $kajian1['tempat']?></span></li>
                                        </ul>
                                        <ul class="lab-ul event-count" data-date="<?= $kajian1['tanggal']?> <?= $kajian1['jam']?>">
                                            <li>
                                                <span class="days">00</span>
                                                <div class="count-text">Hari</div>
                                            </li>
                                            <li>
                                                <span class="hours">0</span>
                                                <div class="count-text">Jam</div>
                                            </li>
                                            <li>
                                                <span class="minutes">0</span>
                                                <div class="count-text">Menit</div>
                                            </li>
                                            <li>
                                                <span class="seconds">0</span>
                                                <div class="count-text">Detik</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-bottom">
                            <div class="row justify-content-center">

							<?php foreach($kajian as $kajian){?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item mb-4">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="<?= base_url()?>uploads/kajian/<?= $kajian->foto?>" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="<?= base_url()?>kajian/r/<?= $kajian->slug?>"><?= $kajian->nama?></a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li><i class="icofont-calendar"></i> <span><?= $kajian->tanggal?></span>
                                                    </li>
                                                    <li><i class="icofont-location-pin"></i> <span><?= $kajian->tempat?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </div>
                        </div>
						<?php echo $pagination; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include 'komponen/footer.php' ?>
