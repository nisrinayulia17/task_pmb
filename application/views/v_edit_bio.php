<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Biodata</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="<?= base_url('assets2/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets2/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets2/'); ?>css/style3.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="<?= base_url('assets2/'); ?>/img/logo2.png" alt="">
                <span class="d-none d-lg-block">SIPENMARU</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <?php $no = 1;
                        foreach ($camaba as $u) { ?>
                            <img src="<?= base_url('assets2/'); ?>img/profil.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $u->nama_lengkap; ?></span>
                        <?php } ?>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                        <li class="dropdown-header">
                            <?php $no = 1;
                            foreach ($camaba as $u) { ?>
                                <h6><?php echo $u->nama_lengkap; ?></h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout'); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    <?php } ?>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('crud/profil/' . $this->session->id); ?>">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Biodata</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('crud/data_pendaftaran/' . $this->session->id); ?>">
                    <i class="bi bi-card-text"></i>
                    <span>Data Pendaftaran</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('crud/seleksi'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Hasil Seleksi</span>
                </a>
            </li><!-- End Dashboard Nav -->



    </aside><!-- End Sidebar-->


    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p>Isi Biodata secara lengkap dan sesuai!</p>
                            <form method="post" action="<?= base_url() . 'index.php/crud/update_bio' ?>">
                                <?php $no = 1;
                                foreach ($camaba as $u) { ?>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $u->id; ?>">
                                        </div>
                                    </div>
                                    <h5 class="card-title">Edit data akun</h5>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" value="<?php echo $u->username; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" value="<?php echo $u->email; ?>">
                                        </div>
                                    </div>
                                    <h5 class="card-title">Edit Biodata</h5>
                                    <div class="row mb-3">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $u->nama_lengkap; ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="NIK" value="<?php echo $u->NIK; ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $u->tempat_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $u->tanggal_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <input type="textarea" class="form-control" name="jenis_kelamin" value="<?php echo $u->jenis_kelamin; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputColor" class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="agama" value="<?php echo $u->agama; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $u->alamat; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nomor HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nomor_hp" value="<?php echo $u->nomor_hp; ?>">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" type="submit">Simpan</button>
                                <?php } ?>


                            </form><!-- End General Form Elements -->
                            <!-- End small tables -->

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets2/'); ?>vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets2/'); ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets2/'); ?>js/main.js"></script>

</body>

</html>