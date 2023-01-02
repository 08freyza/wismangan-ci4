<?= $this->extend('layout/frontend/index'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<main id="main">
    <!-- Menu -->
    <section id="menu" class="menu">
        <div class="container mt-5 mb-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Menu</h2>
            </div>

            <div class="row content">
                <?php $dataCategory = ['AL', 'SP', 'MU', 'MA', 'MI', 'SO', 'HP', 'MN']; ?>
                <ul class="nav justify-content-center nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
                    <?php foreach ($dataCategory as $category) : ?>
                        <li class="nav-item mx-2" role="presentation">
                            <button class="btn btn-outline-warning rounded-pill px-4 mb-2 <?= $category === 'AL' ? 'active' : ''; ?>" id="pills-<?= strtolower(str_replace(' ', '', $product_type_text[$category])); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?= strtolower(str_replace(' ', '', $product_type_text[$category])); ?>" type="button" role="tab" aria-controls="pills-<?= strtolower(str_replace(' ', '', $product_type_text[$category])); ?>" aria-selected="true"><?= ucwords($product_type_text[$category]); ?></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <?php $formCounter = 1; ?>
                    <?php foreach ($dataCategory as $category) : ?>
                        <!-- loop menu -->
                        <div class="tab-pane fade show <?= $category === 'AL' ? 'active' : ''; ?>" id="pills-<?= strtolower(str_replace(' ', '', $product_type_text[$category])); ?>" role="tabpanel" aria-labelledby="pills-<?= strtolower(str_replace(' ', '', $product_type_text[$category])); ?>-tab" tabindex="0">
                            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
                                <?php foreach ($data as $all) : ?>
                                    <?php if (strpos($all['product_type'], $category) !== false) : ?>
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
                                                        <?php $getFormCounter = $formCounter; ?>
                                                        <form id="form<?= $formCounter++; ?>">
                                                            <div class="card-text d-flex justify-content-center">
                                                                <input type="hidden" id="customerId" name="customerId" value="<?= $login_check['user']['customer_id']; ?>">
                                                                <input type="hidden" id="productId" name="productId" value="<?= $all['product_id']; ?>">
                                                                <input type="hidden" id="quantity" name="quantity" value="1">
                                                                <input type="hidden" id="statusCart" name="statusCart" value="A">
                                                                <button class="btn btn-warning rounded-pill this-button px-4 w-75 py-2 <?= $getFormCounter; ?>" id="clickhere<?= $getFormCounter; ?>"><i class="fa-solid fa-plus"></i> Order</button>
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
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu End -->
</main>
<!-- Main End -->

<?= $this->endSection('content'); ?>