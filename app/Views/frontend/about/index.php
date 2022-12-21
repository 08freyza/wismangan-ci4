<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Hero -->
<section id="carousel" class="d-flex align-items-center carousel-mt mb-0 pb-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carousel-1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel-3.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel-4.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel-5.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Main -->
<main id="main">
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100" data-aos="zoom-in" data-aos-delay="0.1s" src="assets/img/about-1.jpg" />
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75" data-aos="zoom-in" data-aos-delay="0.3s" src="assets/img/about-2.jpg" style="margin-top: 25%" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75" data-aos="zoom-in" data-aos-delay="0.5s" src="assets/img/about-3.jpg" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100" data-aos="zoom-in" data-aos-delay="0.7s" src="assets/img/about-4.jpg" />
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