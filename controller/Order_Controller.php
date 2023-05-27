<?php
require_once '../models/Order_Model.php';
require_once '../connection/connection.php';


/* Menangkap Data Reguest Product_From */

$kode_suplai = $_POST['kode_suplai'];
$date = $_POST['tanggal'];
$produk_id = $_POST['produk_id'];
$supplier_id = $_POST['supplier_id'];
$total = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];

/* Save Data Ke Array Product_From  */

$SuplaiDT = [

    $kode_suplai,
    $date,
    $produk_id,
    $supplier_id,
    $total,
    $keterangan,
];


/* Proses CRUD Data Product_From */

$tombol = $_POST['process'];
$model = new Suplai_Model();
switch ($tombol){
    case 'create': $model->create($SuplaiDT); break;
    case 'edit':
        $SuplaiDT[] = $_POST['edit'];
        $model->edit($SuplaiDT); break;
    case 'delete':
        unset($SuplaiDT);
        $SuplaiDT = [$_POST['delete']];
        $model->delete($SuplaiDT); break;
    default: header('location: ../index.php?halaman=suplai_product');
}

/* Proses CRUD Data Product_From Selesai Langsung Ke Halaman Product */
header('location: ../index.php?halaman=suplai_product');

?>