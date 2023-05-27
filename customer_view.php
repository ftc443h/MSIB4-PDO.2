<?php
$id = $_REQUEST['id'];
$objPelanggan = new Customer();
$dataPelanggano = $objPelanggan->getCustomer($id);
?>

<div id="container-divView" class="card" style="width: 18rem;">
    <img id="container-FTview" src="assets/img/<?= $dataPelanggano['foto'] ?>" class="card-img-top" />
    <div class="card-body">
        <h5 id="container-h5View" class="card-title">
            <?= $dataPelanggano['nama'] ?>
        </h5>
        <p id="container-PragView" class="card-text">
            Nama : <?= $dataPelanggano['nama']?>
            <br />telepon : <?= $dataPelanggano['telepon'] ?>
            <br />email : <?= $dataPelanggano['email']?>
            <br />alamat : <?= $dataPelanggano['alamat']?>
        </p>
        <a id="container-buttonView" href="index.php?halaman=customer" class="btn">Back</a>
    </div>
</div>