<div id="cont-divProd" class="container px-5 my-5">
    <h1 class="contaier-crtprod">create product</h1>
    <form method="POST" action="controller/Product_Controller.php" class="container-fromproc" id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" name="kode" id="productCode" type="text" placeholder="product code" data-sb-validations="required" />
            <label id="container-labexProduct" for="productCode">product code</label>
            <div class="invalid-feedback" data-sb-feedback="productCode:required">product code is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" id="productName" type="text" placeholder="product name" data-sb-validations="required" />
            <label id="container-labexProduct" for="productName">product name</label>
            <div class="invalid-feedback" data-sb-feedback="productName:required">product name is required.</div>
        </div>

        <div class="mb-3">
            <label id="container-labxtype" class="form-label d-block">product type</label>
            <?php
            $objJenis = new Jenis();
            $dataPro = $objJenis->productItems();
            foreach ($dataPro as $jenisData){
            ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="jenis" id="<?= $jenisData['nama'] ?>" type="radio" value="<?= $jenisData['id'] ?>" data-sb-validations="required" />
                <label id="container-type" class="form-check-label" for="options">
                    <?= $jenisData['nama'] ?>
                </label>
            </div>
            <?php } ?>
            <div class="invalid-feedback" data-sb-feedback="type:required">One option is required.</div>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" name="harga" id="productPrice" type="text" placeholder="product price" data-sb-validations="required" />
            <label id="container-labexProduct" for="productPrice">product price</label>
            <div class="invalid-feedback" data-sb-feedback="productPrice:required">product price is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="stok" id="productStock" type="text" placeholder="product stock" data-sb-validations="required" />
            <label id="container-labexProduct" for="productStock">product stock</label>
            <div class="invalid-feedback" data-sb-feedback="productStock:required">product stock is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="foto" id="productPhoto" type="text" placeholder="product photo" data-sb-validations="required" />
            <label id="container-labexProduct" for="productPhoto">product photo</label>
            <div class="invalid-feedback" data-sb-feedback="productPhoto:required">product photo is required.</div>
        </div>
        <button class="btn btn-lg" id="container-inpt" name="process" value="create" type="submit">save</button>
        <button class="btn btn-lg" id="container-inptt" name="process" value="cancel" type="submit">cancel</button>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>