<?php
include 'komponen/header.php';
include 'komponen/navbar.php'
?>

<!-- Konten -->

<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Gallery Masjid Baiturrahman</h4>
                <ul class="lab-ul">
                    <li><a href="<?= base_url()?>">Home</a></li>
                    <li><a class="active">Gallery</a></li>
                </ul>
            </div>
        </div>
    </section>

	<div class="gallery-section padding-tb">
        <div class="container">
            <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
                <li class="filter-btn is-checked" data-filter="*">SEMUA <span class="filter-item-num">00</span></li>
                <li class="filter-btn" data-filter=".kajian">Kajian <span class="filter-item-num">00</span>
                </li>
                <li class="filter-btn" data-filter=".idul-adha">Idul Adha <span class="filter-item-num">00</span>
                </li>
                <li class="filter-btn" data-filter=".idul-fitri">Idul Fitri <span class="filter-item-num">00</span></li>
                <li class="filter-btn" data-filter=".ramadhan">Ramadhan <span class="filter-item-num">00</span>
                </li>
            </ul>
            <div class="grid pb-15" style="position: relative; height: 3144.25px;">
			<?php foreach($foto->result() as $foto) {?>
                <div class="grid-item <?= $foto->kategori?>" style="position: absolute; left: 0px; top: 0px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="<?= base_url()?>uploads/galery/<?= $foto->file?>" alt="gallery-img">
                        </div>
                        <div class="grid-content p-2">
                            <a href="<?= base_url()?>uploads/galery/<?= $foto->file?>" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5><?= $foto->nama?></h5>
                            <p><?= $foto->deskripsi?></p>
                        </div>
                    </div>
                </div>
				<?php }?>
                <!-- <div class="grid-item ramadan" style="position: absolute; left: 0px; top: 314.609px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/02.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/02.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat" style="position: absolute; left: 0px; top: 729.078px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/03.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/03.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr" style="position: absolute; left: 0px; top: 1043.69px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/04.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/04.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item shab-e-barat eid-ul-fitr" style="position: absolute; left: 0px; top: 1457.25px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/05.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/05.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item eid-ul-fitr eid-ul-adha" style="position: absolute; left: 0px; top: 1771.86px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/06.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/06.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat" style="position: absolute; left: 0px; top: 2086.47px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/09.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/09.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr" style="position: absolute; left: 0px; top: 2500.94px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/08.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/08.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-adha" style="position: absolute; left: 0px; top: 2815.54px;">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="assets/images/gallery/mason/07.jpg" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="assets/images/gallery/mason/07.jpg" data-rel="lightcase"><i class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


<?php include 'komponen/footer.php' ?>
