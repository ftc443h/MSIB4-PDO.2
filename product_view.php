<?php
$id = $_REQUEST['id'];
$objData = new Product();
$dataPro = $objData->getProduct($id);
?>

<div id="container-divView" class="card" style="width: 18rem;">
    <img id="container-FTview" src="assets/img/<?= $dataPro['foto'] ?>" class="card-img-top" />
    <div class="card-body">
        <h5 id="container-h5View" class="card-title">
            <?= $dataPro['nama'] ?>
        </h5>
        <p id="container-PragView" class="card-text">
            Code : <?= $dataPro['kode']?>
            <br />Price : Rp. <?= number_format($dataPro['harga'],0,',','.')?>
            <br />Stock : <?= $dataPro['stok']?>
            <br />Category : <?= $dataPro['kategori']?>
        </p>
        <a id="container-buttonView" href="index.php?halaman=product" class="btn">Back</a>
    </div>
</div>