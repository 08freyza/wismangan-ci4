<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- Profile -->
    <section id="about" class="about">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="200px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <!-- <span class="font-weight-bold">Edogaru</span>
                        <span class="text-black-50">edogaru@mail.com.my</span> -->
                        <a class="btn btn-outline-danger profile-button rounded-pill px-4 mt-3" href="<?= base_url('/profile/delete'); ?>">Hapus Akun</a>
                        <span> </span>
                    </div>
                </div>
                <div class="col-md-6 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Identitas</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Nama</label>
                                <p class="fst-italic"><?= $data['first_name'] . " " . $data['last_name']; ?></p>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Alamat</label>
                                <p class="fst-italic"><?= $data['address']; ?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data kontak</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Alamat Email</label>
                                <p class="fst-italic"><?= $data['email']; ?></p>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Nomor Handphone</label>
                                <p class="fst-italic"><?= $data['phone']; ?></p>
                            </div>
                        </div>
                        <div class="mt-3 text-start">
                            <a class="btn btn-info profile-button me-2 rounded-pill px-4" href="<?= base_url('/profile/edit'); ?>">Ubah Profil</a>
                            <a class="btn btn-info profile-button me-2 rounded-pill px-4" href="<?= base_url('/profile/password'); ?>">Ubah Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>