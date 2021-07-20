    <!-- Footer Section start here -->
    <footer class="footer-section" style="background-image: url(<?= base_url()?>assets/frontend/images/bg-images/footer-bg.png);">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="<?= base_url()?>assets/frontend/images/footer/footer-top/01.png" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Telpon : <?= $kontak['nomer']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="<?= base_url()?>assets/frontend/images/footer/footer-top/02.png" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Email : <?= $kontak['email']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="<?= base_url()?>assets/frontend/images/footer/footer-top/03.png" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Alamat : <?= $kontak['alamat']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-tb tri-shape-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>Tentang MBR</h5>
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4"><?= $tentang['sejarah']?></p>
                                    <img src="<?= base_url()?>uploads/images/<?= $tentang['foto']?>" alt="about-image"
                                        class="footer-abt-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>Berita Terbaru</h5>
                                </div>
                                <div class="fm-item-content">
								<?php foreach($berita1 as $ber){?>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="<?= base_url()?>berita/<?= $ber->slug?>"> <img src="<?= base_url()?>uploads/blog/<?= $ber->foto?>"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="<?= base_url()?>berita/<?= $ber->slug?>"><?= $ber->judul?></a></h6>
                                                <p><?= $ber->createat?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-5 mb-lg-0">
                                <div class="fm-item-title">
                                    <h5>Kajian Terbaru</h5>
                                </div>
                                <div class="fm-item-content">
								<?php foreach($kajian2 as $kaj){?>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="<?= base_url()?>berita/<?= $kaj->slug?>"> <img src="<?= base_url()?>uploads/kajian/<?= $kaj->foto?>"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="<?= base_url()?>kajian/<?= $kaj->slug?>"><?= $kaj->nama?></a></h6>
                                                <p><?= $kaj->tanggal?></p>
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
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy; <?= date('Y')?> Masjid Baiturrahman Sleman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section end here -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="<?= base_url()?>assets/frontend/js/jquery.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/fontawesome.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/waypoints.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/swiper.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/circularProgressBar.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/lightcase.js"></script>
    <script src="<?= base_url()?>assets/frontend/js/functions.js"></script>
</body>

</html>
