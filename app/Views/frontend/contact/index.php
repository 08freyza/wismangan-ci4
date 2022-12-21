<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- Contact -->
    <section id="contact" class="contact section-bg">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Silahkan sampaikan saran dan keluhan Anda, dengan mengisi form dibawah ini.</p>
                <br>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Jalan Kasablanka, Jakarta Selatan, JKT 13810, Indonesia</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>wismangan@gmail.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Hubungi:</h4>
                            <p>+62 21 3632 999</p>
                        </div>

                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=jalan kasablanka&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 290px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 290px;
                                }

                                .gmap_iframe {
                                    width: 100% !important;
                                    height: 290px !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama Anda</label>
                                <input type="text" name="name" class="form-control" id="name" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email Anda</label>
                                <input type="email" class="form-control" name="email" id="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subjek</label>
                            <input type="text" class="form-control" name="subject" id="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Memuat</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda telah terkirim. Terima Kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>