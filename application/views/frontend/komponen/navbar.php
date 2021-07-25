<!-- Header Section Starts Here -->
<header class="header-3 pattern-1">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-3 col-12">
                <div
                    class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="<?= base_url()?>">
                            <img src="<?= base_url()?>uploads/system/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left lab-ul">
                            <li>
                                <i class="icofont-ui-call"></i>
                                <span><?= $kontak['nomer']?></span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                Sinduharjo, Depok , Sleman
                            </li>
                        </ul>
                        <ul class="social-icons lab-ul d-flex">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                <li>
                                    <a href="<?= base_url()?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>kajian">Kajian</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>berita">Berita</a>

                                </li>
                                <li>
                                    <a href="<?= base_url()?>gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>kontak">Kontak</a>
                                </li>
                                <li>
                                    <a href="<?= base_url()?>ponpes">PONPES</a>
                                </li>
                            </ul>
                            <?php

								$url = "https://api.pray.zone/v2/times/today.json?city=sleman";
								$data = file_get_contents($url);
								# parsing variabel $data ke dalam array
								$jadwal = json_decode($data);
								
								if ($jadwal->status === "OK") {
									# tampilkan menggunakan perulangan
									foreach ($jadwal->results->datetime as $s) {
								?>

															<div class="prayer-time d-none d-lg-block">
																<a href="#" class="prayer-time-btn">
																	<i class="icofont-clock-time"></i>
																<?php
									$subuh = $s->times->Fajr ;
									$dzuhur	= $s->times->Dhuhr ;
									$asar	= $s->times->Asr;
									$magrib	= $s->times->Maghrib ;
									$isya	= $s->times->Isha ;
									date_default_timezone_set("Asia/Jakarta");
									$jam = date("H");
									if ($jam < 05) {
										echo "$subuh (SUBUH)" ;
									} elseif ($jam < 13 ) {
										echo "$dzuhur (DZUHUR)" ;
									} elseif ($jam < 16 ) {
										echo "$asar (ASAR)" ;
									} elseif ($jam < 18 ) {
										echo "$magrib (MAGRIB)" ;
									} elseif ($jam < 19 ) {
										echo "$isya (ISYA)" ;
									} else {
										echo "$subuh (SUBUH)";
									}
									?>
                                </a>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section Ends Here-->
