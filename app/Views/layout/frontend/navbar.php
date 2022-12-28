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
        <?php if (isset($login_check) && $login_check['login_status']) : ?>
            <li class="dropdown">
                <a class="getstarted" href="<?= base_url('cart'); ?>" style="width: 170px">
                    <i class="fa-solid fa-cart-shopping text-white"></i>
                    <span class="text-white" id="cartsum">Keranjang (0)</span>
                </a>
                <ul class="dropdown dropdown-menu mt-1 special-dropdown cart-dropdown py-2" style="right: -82px; width: 340px;">
                    <div class="row overflow-auto pe-0" id="cartval" style="width: 340px;">
                    <!-- Powered by JS -->
                    </div>
                    <li><a href="<?= base_url('/cart'); ?>" class="text-bold text-black" style="padding-bottom: 12px; padding-top: 12px;">Lihat semua</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-menu-right user-dropdown">
                <a class="getstarted" href="#" aria-expanded="false" style="width: 160px;">
                    <i class="fa-solid fa-user text-white"></i>
                    <span class="text-white"><?= $login_check['user']['first_name']; ?></span>
                </a>
                <ul class="dropdown dropdown-menu-end mt-1 special-dropdown mx-auto">
                    <li><a href="<?= base_url('/profile'); ?>" class="">My Profile</a></li>
                    <li><a href="<?= base_url('/wishlist'); ?>" class="">Wishlist</a></li>
                    <li><a href="<?= base_url('/order/status'); ?>" class="">Order Status</a></li>
                    <li><a href="<?= base_url('/logout'); ?>" class="">Logout</a></li>
                </ul>
            </li>
        <?php else : ?>
            <li>
                <a class="getstarted" href="<?= base_url('/login') ?>" style="width: 140px;">
                    <!-- <i class="fa-solid fa-user text-white""></i> -->
                    <span class=" text-white">Login </span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- Navbar End-->