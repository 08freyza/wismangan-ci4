<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- About -->
    <section id="about" class="about">
        <div class="container mt-5 mb-5">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100" data-aos="zoom-in" data-aos-delay="0.1s" src="<?= base_url('frontend/assets/img/about-1.jpg') ?>" />
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75" data-aos="zoom-in" data-aos-delay="0.3s" src="<?= base_url('frontend/assets/img/about-2.jpg') ?>" style="margin-top: 25%" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75" data-aos="zoom-in" data-aos-delay="0.5s" src="<?= base_url('frontend/assets/img/about-3.jpg') ?>" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100" data-aos="zoom-in" data-aos-delay="0.7s" src="<?= base_url('frontend/assets/img/about-4.jpg') ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h1 class="mb-4">Selamat Datang di WisMangan</h1>
                    <p class="mb-4">Kami berdiri sejak tahun 2015. Kami menyediakan aneka masakan rumahan yang tidak bisa Anda lewatkan.</p>
                    <p class="mb-4">Dengan racikan bumbu dan resep yang kami buat serta kualitas masakan yang sempurna. Kami menyediakannya sesuai cita rasa khas masakan asli nusantara.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">7</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Tahun</p>
                                    <h6 class="text-uppercase mb-0">Berdiri</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Koki</p>
                                    <h6 class="text-uppercase mb-0">Terbaik</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>