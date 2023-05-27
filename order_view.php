<?php
$id = $_REQUEST['id'];
$objOrder= new Order_Model();
$dataOrder = $objOrder->getOrder($id);
?>

<div id="container-divView" class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 id="container-h5View" class="card-title">
            Order View
        </h5>
        <p id="container-PragView" class="card-text">
            Code Order : <?= $dataOrder['produk_id']?>
            <br />Customer : <?= $dataOrder['pelanggan_id'] ?>
            <br />Date : <?= $dataOrder['tanggal']?>
            <br />Total : <?= $dataOrder['jumlah']?>
            <br />Keterangan : <?= $dataOrder['keterangan']?>
        </p>
        <a id="container-buttonView" href="index.php?halaman=order" class="btn">Back</a>
    </div>
</div>