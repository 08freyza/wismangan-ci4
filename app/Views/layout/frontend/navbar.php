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
        <li>
            <a class="getstarted" href="#">
                <span>Keranjang </span>
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </li>
        <li>
            <a class="getstarted" href="<?= base_url('/login') ?>">
                <span>Login </span>
                <i class="fa-solid fa-user"></i>
            </a>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- Navbar End-->