<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('message')) : ?>
    <div id="message-notify-frontend" class="d-none">
        <?= session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>

<!-- main -->
<main id="main">
    <!-- Promo -->
    <section id="promo" class="promo">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Registrasi ke Wismangan</h2>
            </div>
            <p class="text-center">Mari bergabung bersama kami.</p>

            <div class="row content justify-content-center">
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-12 my-auto">
                        <div class="card card-rounded p-4">
                            <div class="card-body">
                                <form class="row g-3" action="<?= base_url('/registration_process') ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="col-md-6">
                                        <label for="firstname" class="form-label">Nama Awal</label>
                                        <input type="name" class="form-control rounded-pill px-3 <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="firstname" name="firstname" value="<?= old('firstname'); ?>">
                                        <div id=" validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('firstname'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="form-label">Nama Akhir</label>
                                        <input type="name" class="form-control rounded-pill px-3 <?= ($validation->hasError('lastname')) ? 'is-invalid' : ''; ?>" id="lastname" name="lastname" value="<?= old('lastname'); ?>">
                                        <div id=" validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('lastname'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-pill px-3 <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="name" class="form-control rounded-pill px-3 <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username'); ?>">
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('username'); ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input type="text" class="form-control rounded-pill px-3" id="address" name="address" value="<?= old('address'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Kota</label>
                                        <input type="text" class="form-control rounded-pill px-3" id="city" name="city" value="<?= old('city'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="province" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control rounded-pill px-3" id="province" name="province" value="<?= old('province'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state" class="form-label">Negara</label>
                                        <select id="state" class="form-select rounded-pill px-3" name="state" value="<?= old('state'); ?>">
                                            <option selected value="">Pilih Negara..</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Singapura">Singapura</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Amerika Serikat">Amerika Serikat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="zip" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control rounded-pill px-3" id="zip" name="zip" value="<?= old('zip'); ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="phone" class="form-label">Nomor Telepon</label>
                                        <input type="tel" class="form-control rounded-pill px-3" id="phone" name="phone" value="<?= old('phone'); ?>">
                                    </div>
                                    <div class="col-12 password-container">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-pill px-3 <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                                        <i class="<?= ($validation->hasError('password')) ? '' : 'bi bi-eye'; ?>" id="togglePassword"></i>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 password-container">
                                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control rounded-pill px-3 <?= ($validation->hasError('confirmpassword')) ? 'is-invalid' : ''; ?>" id="confirmpassword" name="confirmpassword">
                                        <i class="<?= ($validation->hasError('confirmpassword')) ? '' : 'bi bi-eye'; ?>" id="toggleConfirmPassword"></i>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('confirmpassword'); ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Terima Syarat dan Ketentuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary rounded-pill px-3 w-100">Registrasi</button>
                                    </div>
                                    <p class="form-text text-center">Sudah punya akun? Silakan login <a href="<?= base_url('/login') ?>">disini</a>.</p>
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