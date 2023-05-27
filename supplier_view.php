<?php
$id = $_REQUEST['id'];
$objSupplier = new Supplier();
$dataSupplier = $objSupplier->getSupplier($id);
?>

<div id="container-divView" class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 id="container-h5View" class="card-title">
            <?= $dataSupplier['nama'] ?>
        </h5>
        <p id="container-PragView" class="card-text">
            Nama : <?= $dataSupplier['nama']?>
            <br />telepon : <?= $dataSupplier['telepon'] ?>
            <br />email : <?= $dataSupplier['email']?>
            <br />alamat : <?= $dataSupplier['alamat']?>
        </p>
        <a id="container-buttonView" href="index.php?halaman=supplier" class="btn">Back</a>
    </div>
</div>