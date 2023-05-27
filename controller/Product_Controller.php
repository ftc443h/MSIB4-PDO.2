<?php
require_once '../models/Product.php';
require_once '../connection/connection.php';


/* Menangkap Data Reguest Product_From */

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$foto = $_POST['foto'];
$jenis = $_POST['jenis'];

/* Save Data Ke Array Product_From  */

$dataCrt = [
    $kode,
    $nama,
    $harga,
    $stok,
    $foto,
    $jenis,
];


/* Proses CRUD Data Product_From */

$tombol = $_POST['process'];
$model = new Product();
switch ($tombol){
    case 'create': $model->create($dataCrt); break;
    case 'edit':
        $dataCrt[] = $_POST['edit'];
        $model->edit($dataCrt); break;
    case 'delete':
        unset($dataCrt);
        $dataCrt = [$_POST['delete']];
        $model->delete($dataCrt); break;
    default: header('location: ../index.php?halaman=product');
}

/* Proses CRUD Data Product_From Selesai Langsung Ke Halaman Product */
header('location: ../index.php?halaman=product');

?>