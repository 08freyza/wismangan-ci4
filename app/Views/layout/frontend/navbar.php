<!-- Navbar -->
<nav id="navbar" class="navbar">
    <ul>
        <li>
            <a class="nav-link <?= $navbar_active == 'Home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li>
            <a class="nav-link <?= $navbar_active == 'Promo' ? 'active' : '' ?>" href="<?= base_url('/promo') ?>">Promo</a>
        </li>
        <li>
            <a class="nav-link <?= $navbar_active == 'Menu' ? 'active' : '' ?>" href="<?= base_url('/menu') ?>">Menu</a>
        </li>
        <li>
            <a class="nav-link <?= $navbar_active == 'Tentang Kami' ? 'active' : '' ?>" href="<?= base_url('/about') ?>">Tentang Kami</a>
        </li>
        <li>
            <a class="nav-link <?= $navbar_active == 'Hubungi Kami' ? 'active' : '' ?>" href="<?= base_url('/contact') ?>">Hubungi Kami</a>
        </li>
        <?php if(isset($login_check) && $login_check['login_status']) : ?>
            <li class="dropdown">
                <a class="getstarted" href="<?= base_url('cart'); ?>" style="width: 170px">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Keranjang (4) </span>
                </a>
                <ul class="dropdown dropdown-menu mt-1 special-dropdown cart-dropdown py-2" style="right: -82px; width: 340px;">
                    <div class="row overflow-auto pe-0" style="height: 238px; width: 340px;">
                        <li class="p-0">
                            <a href="<?= base_url('/cart'); ?>" class="justify-content-center" style="margin: 2px 4px 2px 4px; padding: 12px 18px 12px 18px; color: black;">
                                <div class="col-3">
                                    <img src="<?= base_url('frontend/assets/img/test.png'); ?>" alt="red" width="50" height="50" class="ms-2">
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0 text-truncate">Ayam Betutu</h5>
                                    <p class="mb-0 mt-1" style="font-size: 12px;">Rp. 25.000</p>
                                </div>
                                <div class="col-3 align-items-center">
                                    <h5 class="mb-0 text-end me-2" style="font-size: 16px;">1 Pt</h5>
                                </div>
                            </a>
                            <hr class="m-auto" style="width: 87%;">
                        </li>
                        <li class="p-0">
                            <a href="<?= base_url('/cart'); ?>" class="justify-content-center" style="margin: 2px 4px 2px 4px; padding: 12px 18px 12px 18px; color: black;">
                                <div class="col-3">
                                    <img src="<?= base_url('frontend/assets/img/test.png'); ?>" alt="red" width="50" height="50" class="ms-2">
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0 text-truncate">Ayam Betutu</h5>
                                    <p class="mb-0 mt-1" style="font-size: 12px;">Rp. 25.000</p>
                                </div>
                                <div class="col-3 align-items-center">
                                    <h5 class="mb-0 text-end me-2" style="font-size: 16px;">1 Pt</h5>
                                </div>
                            </a>
                            <hr class="m-auto" style="width: 87%;">
                        </li>
                        <li class="p-0">
                            <a href="<?= base_url('/cart'); ?>" class="justify-content-center" style="margin: 2px 4px 2px 4px; padding: 12px 18px 12px 18px; color: black;">
                                <div class="col-3">
                                    <img src="<?= base_url('frontend/assets/img/test.png'); ?>" alt="red" width="50" height="50" class="ms-2">
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0 text-truncate">Ayam Betutu</h5>
                                    <p class="mb-0 mt-1" style="font-size: 12px;">Rp. 25.000</p>
                                </div>
                                <div class="col-3 align-items-center">
                                    <h5 class="mb-0 text-end me-2" style="font-size: 16px;">1 Pt</h5>
                                </div>
                            </a>
                            <hr class="m-auto" style="width: 87%;">
                        </li>
                        <li class="p-0">
                            <a href="<?= base_url('/cart'); ?>" class="justify-content-center" style="margin: 2px 4px 2px 4px; padding: 12px 18px 12px 18px; color: black;">
                                <div class="col-3">
                                    <img src="<?= base_url('frontend/assets/img/test.png'); ?>" alt="red" width="50" height="50" class="ms-2">
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0 text-truncate">Nasi Goreng Original</h5>
                                    <p class="mb-0 mt-1" style="font-size: 12px;">Rp. 25.000</p>
                                </div>
                                <div class="col-3 align-items-center">
                                    <h5 class="mb-0 text-end me-2" style="font-size: 16px;">1 Pt</h5>
                                </div>
                            </a>
                            <hr class="m-auto" style="width: 87%;">
                        </li>
                    </div>
                    <li><a href="<?= base_url('/cart'); ?>" class="text-bold text-black" style="padding-bottom: 12px; padding-top: 12px;">Lihat semua</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-menu-right">
                <a class="getstarted" href="#" aria-expanded="false" style="width: 160px;">
                    <i class="fa-solid fa-user"></i>
                    <span><?= $login_check['user']['first_name']; ?></span>
                </a>
                <ul class="dropdown dropdown-menu-end mt-1 special-dropdown">
                    <li><a href="<?= base_url('/profile'); ?>" class="">My Profile</a></li>
                    <li><a href="<?= base_url('/wishlist'); ?>" class="">Wishlist</a></li>
                    <li><a href="<?= base_url('/order/status'); ?>" class="">Order Status</a></li>
                    <li><a href="<?= base_url('/logout'); ?>" class="">Logout</a></li>
                </ul>
            </li>
        <?php else : ?>
            <li>
                <a class="getstarted" href="<?= base_url('/login') ?>" style="width: 170px;">
                    <i class="fa-solid fa-user"></i>
                    <span>Login </span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- Navbar End-->