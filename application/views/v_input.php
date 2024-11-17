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
                <img src="<?= base_url('assets2/'); ?>img/logo2.png" alt="Profile" class="rounded-circle">
                <span class="d-none d-lg-block">PMB UTP Surakarta</span>
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



            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('auth/syarat'); ?>">
                    <i class="bi bi-clipboard-check"></i>
                    <span>Persyaratan</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('crud'); ?>">
                    <i class="bi bi-journal-text"></i>
                    <span>Formulir Pendaftaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('auth'); ?>">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </li>
        </ul>



    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>Informasi Akun </center>
                            </h5>
                            <p></p>
                            <form method="post" action="<?= base_url() . 'index.php/crud/aksi_tambah_biodata' ?>">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password">
                                    </div>
                                </div>

                                <h5 class="card-title">
                                    <center>Biodata Mahasiswa</center>
                                </h5>
                                <p></p>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_lengkap">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="NIK">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempat_lahir">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Pria" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Pria
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Wanita">
                                            <label class="form-check-label" for="gridRadios2">
                                                Wanita
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="textarea" class="form-control" name="alamat">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios1" value="Islam" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Islam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios2" value="Kristen">
                                            <label class="form-check-label" for="gridRadios2">
                                                Kristen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios3" value="Katolik" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Katolik
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios4" value="Hindu">
                                            <label class="form-check-label" for="gridRadios2">
                                                Hindu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios5" value="Budha" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Budha
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="agama" id="gridRadios6" value="Konghucu">
                                            <label class="form-check-label" for="gridRadios2">
                                                Konghucu
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputColor" class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomor_hp">
                                    </div>
                                </div>
                                <h5 class="card-title">
                                    <center>Data Orangtua </center>
                                </h5>
                                <p></p>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ayah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pekerjaan_ayah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ibu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pekerjaan_ibu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Ortu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat_ortu">
                                    </div>
                                </div>
                                <h5 class="card-title">
                                    <center>Data Pendaftaran </center>
                                </h5>
                                <p></p>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Pilihan 1</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="prodi_1">
                                            <option selected>-- Program Studi --</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <option value="Arsitektur">Arsitektur</option>
                                            <option value="Sistem Informasi Kota Cerdas">Sistem Informasi Kota Cerdas</option>
                                            <option value="Teknologi Pemeliharaan Pesawat">Teknologi Pemeliharaan Pesawat</option>
                                            <option value="Agroteknologi">Agroteknologi</option>
                                            <option value="Agribisnis">Agribisnis</option>
                                            <option value="Arsitektur">Arsitektur</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Bimbingan Konseling">Bimbingan Konseling</option>
                                            <option value="Pendidikan Kepelatihan Olahraga">Pendidikan Kepelatihan Olahraga</option>
                                            <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                            <option value="Pendidikan Jasmani">Pendidikan Jasmani</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Pilihan 2 </label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="prodi_2">
                                            <option selected>-- Program Studi --</option>
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <option value="Arsitektur">Arsitektur</option>
                                            <option value="Sistem Informasi Kota Cerdas">Sistem Informasi Kota Cerdas</option>
                                            <option value="Teknologi Pemeliharaan Pesawat">Teknologi Pemeliharaan Pesawat</option>
                                            <option value="Agroteknologi">Agroteknologi</option>
                                            <option value="Agribisnis">Agribisnis</option>
                                            <option value="Arsitektur">Arsitektur</option>
                                            <option value="Manajemen">Manajemen</option>
                                            <option value="Akuntansi">Akuntansi</option>
                                            <option value="Bimbingan Konseling">Bimbingan Konseling</option>
                                            <option value="Pendidikan Kepelatihan Olahraga">Pendidikan Kepelatihan Olahraga</option>
                                            <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                            <option value="Pendidikan Jasmani">Pendidikan Jasmani</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Waktu Kuliah</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="waktu_kuliah">
                                            <option selected>-- Waktu Kuliah --</option>
                                            <option value="Teknik Sipil">Kelas Pagi</option>
                                            <option value="Arsitektur">Kelas Malam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tahun_masuk">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Semester Awal</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="semester_awal">
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" type="submit">Simpan</button>

                            </form><!-- End General Form Elements -->

                            <!-- End small tables -->

                        </div>

                    </div>

                </div>
            </div>

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
            &copy; Copyright <strong><span>PMB UTP Surakarta</span></strong>. All Rights Reserved
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