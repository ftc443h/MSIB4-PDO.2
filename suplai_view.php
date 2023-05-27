<?php
$id = $_REQUEST['id'];
$objsuplai = new Suplai_Model();
$datasuplai = $objsuplai->getSuplai($id);
?>

<div id="container-divView" class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 id="container-h5View" class="card-title">
            Suplai View
        </h5>
        <p id="container-PragView" class="card-text">
            Kode_Product : <?= $datasuplai['kode_suplai']?>
            <br />Date : <?= $datasuplai['tanggal'] ?>
            <br />Product_id : <?= $datasuplai['produk_id']?>
            <br />Supplier_id : <?= $datasuplai['supplier_id']?>
            <br />Total : <?= $datasuplai['jumlah']?>
            <br />Keterangan : <?= $datasuplai['keterangan']?>
        </p>
        <a id="container-buttonView" href="index.php?halaman=suplai_product" class="btn">Back</a>
    </div>
</div>