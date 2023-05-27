<?php

/* Menangkap Request ID Edit Data Product */

$edit = $_REQUEST['edit'];
if(!empty($edit)){
    $modelEdit = new Product();
    $dataEdit = $modelEdit->getProduct($edit);
}else{
    $dataEdit = [];
}

?>

<div id="cont-divProd" class="container px-5 my-5">
    <h1 class="contaier-crtprod">edit product</h1>
    <form method="POST" action="controller/Product_Controller.php" class="container-fromproc" id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $dataEdit['kode'] ?>" name="kode" id="productCode" type="text" placeholder="product code" data-sb-validations="required" />
            <label id="container-labexProduct" for="productCode">product code</label>
            <div class="invalid-feedback" data-sb-feedback="productCode:required">product code is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $dataEdit['nama'] ?>" name="nama" id="productName" type="text" placeholder="product name" data-sb-validations="required" />
            <label id="container-labexProduct" for="productName">product name</label>
            <div class="invalid-feedback" data-sb-feedback="productName:required">product name is required.</div>
        </div>
        <div class="mb-3">
            <label id="container-labxtype" class="form-label d-block">product type</label>
            <?php
            $objJenis = new Jenis();
            $dataPro = $objJenis->productItems();
            foreach ($dataPro as $jenisData){
                $check = ($jenisData['id'] == $dataEdit['jenis_id']) ? ' checked' : '';
            ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="jenis" id="<?= $jenisData['nama'] ?>" type="radio"
                    value="<?= $jenisData['id'] ?>" data-sb-validations="required" <?= $check ?> />
                <label id="container-type" class="form-check-label" for="options">
                    <?= $jenisData['nama'] ?>
                </label>
            </div>
            <?php } ?>
            <div class="invalid-feedback" data-sb-feedback="type:required">One option is required.</div>
            </div >

        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $dataEdit['harga'] ?>" name="harga" id="productPrice" type="text" placeholder="product price" data-sb-validations="required" />
            <label id="container-labexProduct" for="productPrice">product price</label>
            <div class="invalid-feedback" data-sb-feedback="productPrice:required">product price is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $dataEdit['stok'] ?>" name="stok" id="productStock" type="text" placeholder="product stock" data-sb-validations="required" />
            <label id="container-labexProduct" for="productStock">product stock</label>
            <div class="invalid-feedback" data-sb-feedback="productStock:required">product stock is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $dataEdit['foto'] ?>" name="foto" id="productPhoto" type="text" placeholder="product photo" data-sb-validations="required" />
            <label id="container-labexProduct" for="productPhoto">product photo</label>
            <div class="invalid-feedback" data-sb-feedback="productPhoto:required">product photo is required.</div>
        </div>

        <?php
        if(empty($edit)){

        ?>
        <button class="btn btn-lg" id="container-inpt" name="process" value="create" type="submit">save</button>
        <?php
        }else{

        ?>
        <button class="btn btn-lg" id="container-inptEdit" name="process" value="edit" type="submit">edit</button>
        <input type="hidden" name="edit" value="<?= $edit ?>" />
        <?php
        }
        ?>
        <button class="btn btn-lg" id="container-inptt" name="process" value="cancel" type="submit">cancel</button>

    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>