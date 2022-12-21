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
    <!-- Promo -->
    <section id="promo" class="promo">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Promo</h2>
            </div>

            <div class="row content">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="col">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="col text-dark" href="#">
                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                            <img src="<?= base_url('assets/img/1.jpg') ?>" class="card-img-top" alt="..." style="border-radius: 20px" />
                            <div class="card-body ps-0">
                                <h5 class="card-title">I Love Monday</h5>
                                <p class="card-text" style="font-size: 13px">Diskon Rp 25.000,- hanya di WisMangan</p>
                                <p class="card-text" style="font-size: 12px">
                                    <span><i class="bx bx-calendar me-2"></i></span>Berlaku hingga 13 Desember 2022
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center mt-4">
                <a href="#" class="btn btn-warning rounded-pill px-4 py-3 fw-bold" style="font-size: 14px">Lihat Semua Promo</a>
            </div> -->
        </div>
    </section>
    <!-- Promo End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>