<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Astor Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url('assets'); ?> /images/logo/astorbig.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Application</li>

                        <li class="sidebar-item">
                            <a href="<?= base_url(); ?>Home/index" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Servis</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="#">Teknisi</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Data Servis</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Sparepart</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="#">Data Sparepart</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item active  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="#">Penjualan Mobil</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url(); ?>Home/lap_service">Pendapatan Service</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url(); ?>Sparepart/lap_sparepart">Pemesanan Sparepart</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Astor visitor Statistics</h3>
            </div>

            <div class="container">
                <a class="btn btn-danger" href="<?= base_url(); ?>Home/laporan_pdf"> eksport pdf </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">id servis</th>
                            <th scope="col">Mobil</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Teknisi</th>
                            <th scope="col">biaya Servis</th>
                            <th scope="col">Tanggal Servis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendapatan_service as $svs) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $svs['idService']; ?></td>
                                <td><?= $svs['mobil']; ?></td>
                                <td><?= $svs['customer']; ?></td>
                                <td><?= $svs['keluhan']; ?></td>
                                <td><?= $svs['technician']; ?></td>
                                <td><?= $svs['biayaService']; ?></td>
                                <td><?= $svs['tanggal_service']; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url(); ?>assets/js/pages/dashboard.js"></script>

    <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>