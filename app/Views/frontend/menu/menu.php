<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Hero -->
<!-- <section id="carousel" class="d-flex align-items-center carousel-mt mb-0 pb-0">
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
                <img src="<?= base_url('frontend/assets/img/carousel-6.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('frontend/assets/img/carousel-1.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('frontend/assets/img/carousel-2.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('frontend/assets/img/carousel-3.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('frontend/assets/img/carousel-4.jpg') ?>" class="d-block w-100" alt="..." />
            </div>
        </div>
    </div>
</section> -->
<!-- Hero End -->

<!-- Main -->
<main id="main">
    <!-- Menu -->
    <section id="menu" class="menu">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Menu</h2>
            </div>

            <div class="row content">

                <ul class="nav justify-content-center nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2 active" id="pills-semua-tab" data-bs-toggle="pill" data-bs-target="#pills-semua" type="button" role="tab" aria-controls="pills-semua" aria-selected="true">Semua</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-sarapan-tab" data-bs-toggle="pill" data-bs-target="#pills-sarapan" type="button" role="tab" aria-controls="pills-sarapan" aria-selected="false">Sarapan Pagi</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-utama-tab" data-bs-toggle="pill" data-bs-target="#pills-utama" type="button" role="tab" aria-controls="pills-utama" aria-selected="false">Makanan Utama</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-ayam-tab" data-bs-toggle="pill" data-bs-target="#pills-ayam" type="button" role="tab" aria-controls="pills-ayam" aria-selected="false">Masakan Ayam</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-ikan-tab" data-bs-toggle="pill" data-bs-target="#pills-ikan" type="button" role="tab" aria-controls="pills-ikan" aria-selected="false">Masakan Ikan</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-sup-tab" data-bs-toggle="pill" data-bs-target="#pills-sup" type="button" role="tab" aria-controls="pills-sup" aria-selected="false">Sup</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-penutup-tab" data-bs-toggle="pill" data-bs-target="#pills-penutup" type="button" role="tab" aria-controls="pills-penutup" aria-selected="false">Makanan Penutup</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-outline-warning rounded-pill px-4 mb-2" id="pills-minuman-tab" data-bs-toggle="pill" data-bs-target="#pills-minuman" type="button" role="tab" aria-controls="pills-minuman" aria-selected="false">Minuman</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- semua -->
                    <div class="tab-pane fade show active" id="pills-semua" role="tabpanel" aria-labelledby="pills-semua-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <div class="col">
                                    <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                        <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                        <div class="card-body ps-0 pe-0">
                                            <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                            <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                            <div class="card-text d-flex justify-content-center mb-2">
                                                <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                            </div>
                                            <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                <form>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                        <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                        <input type="hidden" id="customer_id" name="quantity" value="1">
                                                        <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                </form>
                                            <?php else : ?>
                                                <div class="card-text d-flex justify-content-center">
                                                    <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- sarapan -->
                    <div class="tab-pane fade" id="pills-sarapan" role="tabpanel" aria-labelledby="pills-sarapan-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "SP") !== false ) : ?>
                                    <div class="col">
                                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                            <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                            <div class="card-body ps-0 pe-0">
                                                <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                <div class="card-text d-flex justify-content-center mb-2">
                                                    <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                </div>
                                                <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                    <form>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="quantity" value="1">
                                                            <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    </form>
                                                <?php else : ?>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- utama -->
                    <div class="tab-pane fade" id="pills-utama" role="tabpanel" aria-labelledby="pills-utama-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "MU") !== false ) : ?>
                                    <div class="col">
                                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                            <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                            <div class="card-body ps-0 pe-0">
                                                <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                <div class="card-text d-flex justify-content-center mb-2">
                                                    <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                </div>
                                                <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                    <form>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="quantity" value="1">
                                                            <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    </form>
                                                <?php else : ?>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- ayam -->
                    <div class="tab-pane fade" id="pills-ayam" role="tabpanel" aria-labelledby="pills-ayam-tab" tabindex="0">
                        <!-- <div class="row g-4">
                            <h4 class="text-center">Maaf, data tidak ditemukan.</h4>
                        </div> -->
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "MA") !== false ) : ?>
                                    <div class="col">
                                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                            <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                            <div class="card-body ps-0 pe-0">
                                                <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                <div class="card-text d-flex justify-content-center mb-2">
                                                    <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                </div>
                                                <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                    <form>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="quantity" value="1">
                                                            <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    </form>
                                                <?php else : ?>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- ikan -->
                    <div class="tab-pane fade" id="pills-ikan" role="tabpanel" aria-labelledby="pills-ikan-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "MI") !== false ) : ?>
                                    <div class="col">
                                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                            <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                            <div class="card-body ps-0 pe-0">
                                                <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                <div class="card-text d-flex justify-content-center mb-2">
                                                    <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                </div>
                                                <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                    <form>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="quantity" value="1">
                                                            <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    </form>
                                                <?php else : ?>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- sup -->
                    <div class="tab-pane fade" id="pills-sup" role="tabpanel" aria-labelledby="pills-sup-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "SP") === false) : ?>
                                    <?php if (strpos($all['product_type'], "S") !== false) : ?>
                                        <div class="col">
                                            <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                                <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                                <div class="card-body ps-0 pe-0">
                                                    <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                    <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                    <div class="card-text d-flex justify-content-center mb-2">
                                                        <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                    </div>
                                                    <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                        <form>
                                                            <div class="card-text d-flex justify-content-center">
                                                                <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                                <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                                <input type="hidden" id="customer_id" name="quantity" value="1">
                                                                <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                                <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                            </div>
                                                        </form>
                                                    <?php else : ?>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- penutup -->
                    <div class="tab-pane fade" id="pills-penutup" role="tabpanel" aria-labelledby="pills-penutup-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "HP") !== false ) : ?>
                                    <div class="col">
                                        <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                            <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                            <div class="card-body ps-0 pe-0">
                                                <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                <div class="card-text d-flex justify-content-center mb-2">
                                                    <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                </div>
                                                <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                    <form>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                            <input type="hidden" id="customer_id" name="quantity" value="1">
                                                            <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    </form>
                                                <?php else : ?>
                                                    <div class="card-text d-flex justify-content-center">
                                                        <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- minuman -->
                    <div class="tab-pane fade" id="pills-minuman" role="tabpanel" aria-labelledby="pills-minuman-tab" tabindex="0">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                            <?php foreach ($data as $all) : ?>
                                <?php if (strpos($all['product_type'], "MU") === false) : ?>
                                    <?php if (strpos($all['product_type'], "M") !== false) : ?>
                                        <div class="col">
                                            <div class="card px-3 pt-3 pb-2 shadow p-3" style="border-radius: 20px">
                                                <img src="<?= base_url('frontend/assets/img/' . $all['image']) ?>" class="card-img-top" alt="<?= $all['image']; ?>" style="border-radius: 20px" />
                                                <div class="card-body ps-0 pe-0">
                                                    <h5 class="card-title text-center mb-2"><?= $all['name']; ?></h5>
                                                    <p class="card-text text-center mb-2" style="font-size: 18px;"><?= 'Rp. ' . number_format($all['price'], 0, ',', '.'); ?></p>
                                                    <div class="card-text d-flex justify-content-center mb-2">
                                                        <a href="<?= base_url('menu/' . str_replace(' ', '-', strtolower($all['name']))); ?>" class="btn btn-link rounded-pill px-4">Detail</a>
                                                    </div>
                                                    <?php if (isset($login_check) && $login_check['login_status']) : ?>
                                                        <form>
                                                            <div class="card-text d-flex justify-content-center">
                                                                <input type="hidden" id="customer_id" name="customer_id" value="<?= $login_check['user']['customer_id']; ?>">
                                                                <input type="hidden" id="customer_id" name="product_id" value="<?= $all['product_id']; ?>">
                                                                <input type="hidden" id="customer_id" name="quantity" value="1">
                                                                <input type="hidden" id="customer_id" name="status_cart" value="A">
                                                                <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                            </div>
                                                        </form>
                                                    <?php else : ?>
                                                        <div class="card-text d-flex justify-content-center">
                                                            <button class="btn btn-warning rounded-pill px-4 w-75 py-2"><i class="fa-solid fa-plus"></i> Order</button>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>