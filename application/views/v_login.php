<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login PMB</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="<?= base_url('assets2/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets2/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>/vendor/simple-datatables/style.css" rel="stylesheet">

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

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets2/img/logo.png" alt="">
                                    <center><span class="d-none d-lg-block">Login Pendaftaran Mahasiswa Baru</span></center>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login Akun PMB</h5>
                                        <p class="text-center small"></p>
                                    </div>

                                    <?= $this->session->flashdata('error') ?>

                                    <form class="row g-3 needs-validation" method="post" action="<?= base_url('auth/proses_masuk') ?>">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="username" name="username" class="form-control" id="yourUsername" required>
                                                <small class="text-danger pl-3"><?= form_error('email') ?></small>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <small class="text-danger pl-3"><?= form_error('password') ?></small>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <center>
                                                <p class="small mb-0">Belum punya akun? <a href="<?= base_url('crud'); ?>">Daftar Sekarang</a></p>
                                            </center>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

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