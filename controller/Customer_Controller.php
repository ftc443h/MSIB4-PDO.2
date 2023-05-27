<?php
require_once '../models/Customer.php';
require_once '../connection/connection.php';


/* Menangkap Data Reguest Product_From */

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$alamat = $_POST['alamat'];

/* Save Data Ke Array Product_From  */

$CustomerDT = [

    $nama,
    $telepon,
    $email,
    $foto,
    $alamat,
];


/* Proses CRUD Data Product_From */

$tombol = $_POST['process'];
$model = new Customer();
switch ($tombol){
    case 'create': $model->create($CustomerDT); break;
    case 'edit':
        $CustomerDT[] = $_POST['edit'];
        $model->edit($CustomerDT); break;
    case 'delete':
        unset($CustomerDT);
        $CustomerDT = [$_POST['delete']];
        $model->delete($CustomerDT); break;
    default: header('location: ../index.php?halaman=customer');
}

/* Proses CRUD Data Product_From Selesai Langsung Ke Halaman Product */
header('location: ../index.php?halaman=customer');

?>