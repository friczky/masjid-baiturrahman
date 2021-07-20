<?php

include 'komponen/header.php';
include 'komponen/navbar.php'


?>


    <!-- Banner Section start here -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-thumb">
                                <img src="<?= base_url()?>uploads/system/keluarga1.png" alt="Banner-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-content align-middle">
                                <h2><span class="">Allah selalu bersama <br class="d-none d-lg-block">
                                        orang-orang </span>Yang Beriman.</h2>
                                <p>Mari berjamaah bersama di Masjid Baiturrahman,</p>
                                <a href="<?= base_url()?>gallery" class="lab-btn mt-3">Gallery</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h5>SAMBUTAN KETUA TAKMIR</h5>
                                    <h2 class="mb-0">Masjid Baiturrahman Sukoharjo 01</h2>
                                </div>
                                <h5 class="my-4">Selamat Datang di Website Official Masjid Baiturrahman Sukoharjo 01.</h5>
                                <p>Dengan adanya website ini diharapkan semoga dapat menjadi sumber informasi yang valid untuk jamaah mengenai kegiatan masjid baiturrahman maupun perkembangan dari baiturrahman, mohon doanya semoga masjid baiturrahman untuk selalu istiqomah berdakwah dijalan Allah SWT.</p>
                                <a href="#" class="lab-btn mt-4">Ask About Islam <i class="icofont-heart-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <div class="img-grp">
                                    <div class="about-circle-wrapper">
                                        <div class="about-circle-2"></div>
                                        <div class="about-circle"></div>
                                    </div>
                                    <div class="about-fg-img">
                                        <img src="<?= base_url()?>assets/frontend/images/about/02.png" alt="about-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section bg-ash padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item text-xs-center">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="<?= base_url()?>assets/frontend/images/feature/01.png" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Belajar Al-Qur'an</h5>
                                <p>Mengkaji Al-Qur'an dan Memahami Tafsir
                                </p>
                                <a href="#" class="text-btn">Sponsor Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="<?= base_url()?>assets/frontend/images/feature/02.png" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Classes</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Donate Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="<?= base_url()?>assets/frontend/images/feature/03.png" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Awareness</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Join Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="<?= base_url()?>assets/frontend/images/feature/04.png" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Services</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Get Involved!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End Here -->


    <!-- Faith section start here -->
    <section class="faith-section padding-tb shape-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Rukun Islam</h5>
                        <h2>Rukun Islam terbagi menjadi 5 diantaranya!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faith-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                                aria-labelledby="sahadah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="<?= base_url()?>assets/frontend/images/faith/01.png" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Syahadat <span>(Faith)</span> </h4>
                                            <p>Syahadat, adalah keyakinan Islam, salah satu Rukun Islam dan bagian dari Adzan. Bunyinya: "Saya bersaksi bahwa tidak ada Tuhan selain Allah, dan saya bersaksi bahwa Muhammad adalah utusan Allah."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="<?= base_url()?>assets/frontend/images/faith/02.png" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Sholat <span>(Prayer)</span> </h4>
                                            <p>Setiap Muslim harus berdoa lima kali sehari: di pagi hari, siang hari, sore hari, setelah matahari terbenam, dan awal malam. Doa-doa ini dapat diucapkan di mana saja, doa yang diucapkan bersama orang lain lebih baik daripada yang diucapkan sendirian.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="<?= base_url()?>assets/frontend/images/faith/03.png" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Berpuasa <span>(Fasting)</span> </h4>
                                            <p>Seorang muslim wajib melaksanakan Puasa dibulan Ramadhan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="<?= base_url()?>assets/frontend/images/faith/04.png" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Zakat <span>(Almsgiving)</span> </h4>
                                            <p>Setiap seorang muslim wajib melaksankan zakat dibulan Ramadhan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="<?= base_url()?>assets/frontend/images/faith/05.png" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Naik Haji <span>(Pilgrimage)</span> </h4>
                                            <p>Setiap muslim wajib melaksanakan Haji apabila sudah merasa mampu secara finansial dan fisik.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                    role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                    <img src="<?= base_url()?>assets/frontend/images/faith/faith-icons/01.png" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                    aria-controls="salah-tab" aria-selected="false">
                                    <img src="<?= base_url()?>assets/frontend/images/faith/faith-icons/02.png" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                    aria-controls="sawm-tab" aria-selected="false">
                                    <img src="<?= base_url()?>assets/frontend/images/faith/faith-icons/03.png" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                    aria-controls="zakat-tab" aria-selected="false">
                                    <img src="<?= base_url()?>assets/frontend/images/faith/faith-icons/04.png" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                    aria-controls="hajj-tab" aria-selected="false">
                                    <img src="<?= base_url()?>assets/frontend/images/faith/faith-icons/05.png" alt="faith-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faith section end here -->

    <!-- Qoute Section start Here -->
    <div class="qoute-section padding-tb">
        <div class="qoute-section-wrapper">
            <div class="qoute-overlay"></div>
            <div class="container">
                <div class="qoute-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item qoute-item">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <span>Kata-Kata Mutiara Islam</span>
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="lab-content">
                                        <blockquote class="blockquote">
                                            <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You
                                                    To Carry A Load Of Firewood On His Own Back Than To
                                                    Beg From Someone Else"</span> </p>
                                            <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter
                                                59, hadith 540
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qoute Section end Here -->

    <!-- Events Section start here -->
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
                                    <h3><a href="<?= base_url()?>kajian/<?= $kajian1['slug']?>"><?= $kajian1['nama']?></a> </h3>
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
                                                <h5><a href="<?= base_url()?>kajian/<?= $kajian->slug?>"><?= $kajian->nama?></a> </h5>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events Section end here -->

<?php include 'komponen/footer.php' ?>
