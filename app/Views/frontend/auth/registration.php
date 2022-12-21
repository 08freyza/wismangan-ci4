<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- main -->
<main id="main">
    <!-- Promo -->
    <section id="promo" class="promo">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Registrasi ke Wismangan</h2>
            </div>
            <p class="text-center">Mari bergabung bersama kami.</p>

            <div class="row content">
                <div class="row justify-content-md-center g-4">
                    <div class="col-4 col-md-4 my-auto">
                        <div class="card card-rounded p-4">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control rounded-pill px-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-pill px-3" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary rounded-pill px-3 w-100">Registrasi</button>
                                    </div>
                                    <p class="form-text">Anda belum punya akun? Silakan registrasi <a href="<?= base_url('/registration') ?>">disini</a>.</p>
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