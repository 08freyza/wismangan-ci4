<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $navbar_active == 'Home' && isset($navbar_active) == true  ? $title : $title . ' | Wismangan' ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?= base_url("frontend/assets/img/favicon.png") ?>" rel="icon" />
    <link href="<?= base_url("frontend/assets/img/apple-touch-icon.png") ?>" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url("frontend/assets/vendor/aos/aos.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("frontend/assets/vendor/sweetalert/dist/sweetalert2.css") ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url("frontend/assets/css/style.css") ?>" rel="stylesheet" />

    <!-- JS Sweet Alert -->
    <script src="<?= base_url("frontend/assets/vendor/sweetalert/dist/sweetalert2.all.js") ?>"></script>
</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top <?= $navbar_active != 'Home' ? 'shadow anti-header-scrolled' : '' ?>">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="index.html">
                    <!-- <img src="<?= base_url("frontend/assets/img/logo.png") ?>" alt="" class="img-fluid" width="" /> -->
                    WisMangan
                </a>
            </h1>

            <!-- Navbar -->
            <?= $this->include('layout/frontend/navbar') ?>
            <!-- Navbar End -->
        </div>
    </header>
    <!-- End Header -->

    <!-- Main Content -->
    <?= $this->renderSection('content'); ?>
    <!-- Main Content End -->

    <!-- Footer -->
    <?= $this->include('layout/frontend/footer') ?>
    <!-- Footer End -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url("frontend/assets/vendor/aos/aos.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/php-email-form/validate.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("frontend/assets/vendor/waypoints/noframework.waypoints.js") ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.0/countUp.min.js" integrity="sha512-E0zfDwA1CopT4gzJmj9tMpd7O6pTpuybTK58eY1GwqptdasUohyImuualLt/S5XvM8CDnbaTNP/7MU3bQ5NmQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("frontend/assets/js/main.js") ?>"></script>

    <!-- Other JS Files -->
    <script src="<?= base_url("frontend/assets/js/mainMessage.js") ?>"></script>
</body>

</html>