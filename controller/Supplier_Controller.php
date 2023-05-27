<?php
require_once '../models/Supplier.php';
require_once '../connection/connection.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$SupplirDTT = [
    $nama,
    $telepon,
    $email,
    $alamat,
];

$tombol = $_POST['process'];
$model = new Supplier();
switch ($tombol){
    case 'create': $model->create($SupplirDTT); break;
    case 'edit':
        $SupplirDTT[] = $_POST['edit'];
        $model->edit($SupplirDTT); break;
    case 'delete':
        unset($SupplirDTT);
        $SupplirDTT = [$_POST['delete']];
        $model->delete($SupplirDTT); break;
    default: header('location: ../index.php?halaman=supplier');
}

/* Proses CRUD Data Product_From Selesai Langsung Ke Halaman Product */
header('location: ../index.php?halaman=supplier');
?>