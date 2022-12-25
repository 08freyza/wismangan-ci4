<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- Profile -->
    <section id="about" class="about">
        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle" width="250px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    </div>
                </div>
                <div class="col-md-4 border-right">
                    <div class="p-3 py-5 text-center">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <h2 class="text-right"><?= $data['name']; ?></h2>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels fst-italic mb-1">Jenis Hidangan</label>
                                <?php $type = explode(',', $data['product_type']); ?>
                                <br>
                                <?php foreach ($type as $product_type) : ?>
                                    <div class="btn btn-primary rounded-pill px-3 py-1 me-1 mb-1" style="cursor: default; width: 175px;"><?= $product_type_text[$product_type]; ?></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels fst-italic">Harga</label>
                                <h5 class="mb-0"><?= 'Rp. ' . number_format($data['price'], 0, ',', '.'); ?></h5>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels fst-italic">Status Menu</label>
                                <h5 class=""><?= $data['status'] === 'AV' ? 'Tersedia' : 'Tidak Tersedia'; ?></h5s>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="btn btn-warning rounded-pill px-4 me-1 mb-1" style="width: 152px;"><i class="fa-solid fa-plus"></i> Order</button>
                            <a href="<?= base_url('menu'); ?>" class="btn btn-outline-danger rounded-pill px-4 mb-1" style="width: 152px;">Back to Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- Profile End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>