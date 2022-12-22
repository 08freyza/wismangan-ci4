<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('customerLogStatus')) : ?>
    <div id="message-home-user" class="d-none">
        <?= session()->getFlashdata('customerLogStatus'); ?>
    </div>
<?php endif; ?>

<!-- Hero Carousel -->
<section id="hero" class="d-flex align-items-center pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Cita Rasa Nusantara Yang Tidak Boleh Dilewatkan</h1>
                <h2>Dengan bahan yang berkualitas dan bumbu yang khas, menjadikan suatu perpaduan yang sempurna</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#" class="btn btn-warning rounded-pill px-4 py-3 fw-bold" style="font-size: 14px">Pesan Sekarang</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url('frontend/assets/img/hero-img.png') ?>" class="img-fluid animated" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- Hero Carousel End -->

<!-- main -->
<main id="main">
    <!-- Promo -->
    <section id="promo" class="promo">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Promo</h2>
            </div>

            <div class="row content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <a href="<?= base_url('/promo') ?>" class="btn btn-warning rounded-pill px-4 py-3 fw-bold" style="font-size: 14px">Lihat Semua Promo</a>
            </div>
        </div>
    </section>
    <!-- Promo End -->

    <!-- Menu -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Menu Kami</h2>
            </div>

            <div class="row content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">Berlaku hingga 13 Desember 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">Berlaku hingga 13 Desember 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('frontend/assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">Berlaku hingga 13 Desember 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <a href="<?= base_url('/menu') ?>" class="btn btn-warning rounded-pill px-4 py-3 fw-bold" style="font-size: 14px">Lihat Semua Menu</a>
            </div>
        </div>
    </section>
    <!-- Menu End -->

    <!-- Team -->
    <section id="team" class="team">
        <div class="container">
            <div class="section-title">
                <h2>Koki Kami</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="<?= base_url('frontend/assets/img/team-1.jpg') ?>" alt="" />
                        </div>
                        <h5 class="mb-0">Jajang Suherman</h5>
                        <small>Jajang</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="<?= base_url('frontend/assets/img/team-2.jpg') ?>" alt="" />
                        </div>
                        <h5 class="mb-0">Asep Karyadi</h5>
                        <small>Asep</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="<?= base_url('frontend/assets/img/team-3.jpg') ?>" alt="" />
                        </div>
                        <h5 class="mb-0">Taufik Sukmo</h5>
                        <small>Taufik</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="<?= base_url('frontend/assets/img/team-4.jpg') ?>" alt="" />
                        </div>
                        <h5 class="mb-0">Ujang Wangsa</h5>
                        <small>Ujang</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->

    <!-- services -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Mengapa Memilih Kami?</h2>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bx bxs-user"></i>
                        </div>
                        <h4><a href="">Koki Yang Berpengalaman</a></h4>
                        <p>Kami memiliki koki dengan pengalaman yang banyak dan dengan jam terbang yang tinggi.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa-solid fa-utensils"></i>
                        </div>
                        <h4><a href="">Makanan Berkualitas</a></h4>
                        <p>Kami memiliki perkebunan dan hasil tani sendiri yang memiliki standar kualitas yang tinggi.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bx bxs-cart-add"></i>
                        </div>
                        <h4><a href="">Pemesanan Online</a></h4>
                        <p>Kami antar pesanan Anda, kapanpun dan dimanapun.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="bx bx-headphone"></i>
                        </div>
                        <h4><a href="">Layanan 24/7</a></h4>
                        <p>Layanan penuh untuk pelanggan kami dengan Customer Service terbaik kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
</main>
<!-- main end -->

<?= $this->endSection('content'); ?>