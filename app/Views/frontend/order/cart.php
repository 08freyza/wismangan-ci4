<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- Contact -->
    <section id="cart" class="cart">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Keranjang</h2>
                <br>
            </div>

            <div class="row" id="cartpage">
                <div class="col-sm-12 col-md-12 col-lg-8 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pilih Semua
                                </label>
                            </div>
                        </div>
                        <div class="overflow-auto" id="cartpageval" style="height: 375px;">
                            <!-- <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0"> -->
                            <!-- <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <img src="http://localhost:8080/frontend/assets/img/test.png" alt="red" width="60" height="60" class="">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">Ayam Tumis Kacang Panjang</h5>
                                        <p class="mb-0 mt-1" style="font-size: 15px;">Rp. 25.000</p>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                                            <input type="number" class="form-control" id="quantity" value="0" style="text-align: center;">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0"> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-0 col-lg-4">
                    <div class="card shadow">
                        <!-- <h5 class="card-header">Ringkasan Pesanan</h5> -->
                        <div class="card-body">
                            <h5 class="card-title">Ringkasan Pesanan</h5>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="card-text mb-0">Total Harga (133 Px)</p>
                                <p class="card-text mb-0">Rp. 10.125.000</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="card-text mb-0">Total Diskon</p>
                                <p class="card-text mb-0">Rp. 0</p>
                            </div>
                            <hr>
                            <div class="d-flex w-100 justify-content-between mb-3">
                                <h5 class="card-title mb-0">Total Harga</h5>
                                <h5 class="card-title mb-0">Rp. 25.000</h5>
                            </div>
                            <a href="#" class="btn btn-success w-100">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="toast align-items-center text-white bg-primary border-0 fade hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <!-- Contact End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>