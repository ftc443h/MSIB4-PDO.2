<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fatchan Muhammad Hakim</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php
        include_once 'models/Order_Model.php';
        include_once 'models/Suplai_Model.php';
        include_once 'models/Supplier.php';
        include_once 'models/Customer.php';
        include_once 'models/Product.php';
        include_once 'models/Jenis.php';
        include_once 'models/Member.php';
        include_once 'connection/connection.php';
        include_once 'header.php';
        ?>
    </header>
    <!-- ======= End Header ======= -->

    <!-- ======= Main ======= -->
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <h1 id="container-lopong">
                    <?php
                    $halaman = $_REQUEST['halaman'];
                    if(!empty($halaman) && $halaman != 'Dashboard') echo $halaman;
                    else echo 'dashboard';
                    ?>
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="container-hom" href="index.php?halaman=dashboard">profile</a>
                    </li>
                    <li id="container-dashb" class="breadcrumb-item active">
                        <?php
                        if(!empty($halaman) && $halaman != 'Dashboard') echo $halaman;
                        else echo 'Dashboard';
                        ?>
                    </li>
                </ol>
            </nav>
        </div>

    <!-- End Page Title -->
        <?php
        $halaman = $_REQUEST['halaman'];
        if(!empty($halaman))include_once $halaman.'.php';
        else include_once 'Dashboard.php';
        ?>
    </main>
    <!-- ======= End Main ======= -->

    <!-- ======= Footer ======= -->
    <?php
    include_once 'footer.php';
    ?>
    <!-- ======= End Footer ======= -->


        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="de063367-7262-4a46-837e-47835e3ed9ff";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>
</html>