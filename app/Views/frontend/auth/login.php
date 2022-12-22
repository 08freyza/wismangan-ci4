<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('customerRegistration')) : ?>
    <div id="message-registration-user" class="d-none">
        <?= session()->getFlashdata('customerRegistration'); ?>
    </div>
<?php endif; ?>

<!-- main -->
<main id="main">
    <!-- Promo -->
    <section id="promo" class="promo">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Login ke Wismangan</h2>
            </div>
            <p class="text-center">Silakan login ke akun Anda untuk merasakan pengalaman yang lebih baik.</p>

            <div class="row content justify-content-center">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-12 my-auto">
                        <div class="card card-rounded p-4">
                            <div class="card-body">
                                <form action="<?= base_url('/login_process') ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="emailorusername" class="form-label">Email atau Username</label>
                                        <input type="email" class="form-control rounded-pill px-3" id="emailorusername" name="emailorusername" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">Kami tidak akan menyebarkan email Anda ke siapapun.</div>
                                    </div>
                                    <div class="mb-3 password-container">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-pill px-3" id="password" name="password">
                                        <i class="bi bi-eye" id="togglePassword"></i>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberme">
                                        <label class="form-check-label" for="rememberme">Ingat Saya</label>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary rounded-pill px-3 w-100">Login</button>
                                    </div>
                                    <p class="form-text text-center">Anda belum punya akun? Silakan registrasi <a href="<?= base_url('/registration') ?>">disini</a>.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo End -->
</main>
<!-- main end -->

<?= $this->endSection('content'); ?>