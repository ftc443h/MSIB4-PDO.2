<?php
session_start();

require_once '../models/Member.php';
require_once '../connection/connection.php';


/* Menangkap Data Reguest Product_From */

$username = $_POST['username'];
$password = $_POST['password'];

/* Save Data Ke Array Product_From  */

$dtLogin = [
    $username,
    $password,
];


/* Proses CRUD Data Product_From */

$tombol = $_POST['process'];
$model = new Member();
$Dlogin = $model->checkLogin($dtLogin);

if(!empty($Dlogin)){
    $_SESSION['MEMBER'] = $Dlogin;
    header('location:../index.php?halaman=product');
}
else{
    echo "<script>alert('Sorry Your Username / Password Is Wrong!');
    history.back();
    </script>";
}

?>