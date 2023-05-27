<div div id="cont-divProd" class="container px-5 my-5">
    <h1 class="contaier-crtprod">create suplai product</h1>
    <form method="POST" action="controller/Suplai_Controller.php" class="container-fromproc" id="contactForm" data-sb-form-api-token="API_TOKEN">
        
        <div class="form-floating mb-3">
            <input class="form-control" id="date" type="text" placeholder="Date" data-sb-validations="required" />
            <label id="container-labexProduct" for="date">Date</label>
            <div class="invalid-feedback" data-sb-feedback="date:required">Date is required.</div>
        </div>
       <div class="form-floating mb-3">
            <select class="form-select" name="produk_id" aria-label="Code Product">
                <option value="">-- Kode Product --</option>
                <?php
                //ciptakan obj jenis
                $objJenis = new Jenis();
                $datasuplai = $objJenis->suplaiItems();
                foreach ($datasuplai as $j) {
                    //edit data jenis
                    $sel = ($j['id'] == $datasuplai['produk_id']) ? 'selected' : ''; 
                ?>
                <option value="<?= $j['id'] ?>" <?= $sel ?>><?= $j['produk_id'] ?></option>
                <?php } ?>
            </select>
            <label for="jenisProduk">Code Product</label>
        </div>
       <div class="form-floating mb-3">
            <select class="form-select" name="produk_id" aria-label="Code Product">
                <option value="">-- Kode Supplier --</option>
                <?php
                //ciptakan obj jenis
                $objJenis = new Jenis();
                $datasuplai = $objJenis->suplaiItems();
                foreach ($datasuplai as $j) {
                    //edit data jenis
                    $sel = ($j['id'] == $datasuplai['supplier_id']) ? 'selected' : ''; 
                ?>
                <option value="<?= $j['id'] ?>" <?= $sel ?>><?= $j['supplier_id'] ?></option>
                <?php } ?>
            </select>
            <label for="jenisProduk">Code Supplier</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="total" type="text" placeholder="Total" data-sb-validations="required" />
            <label id="container-labexProduct" for="total">Total</label>
            <div class="invalid-feedback" data-sb-feedback="total:required">Total is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="keterangan" type="text" placeholder="keterangan" data-sb-validations="required" />
            <label id="container-labexProduct" for="keterangan">keterangan</label>
            <div class="invalid-feedback" data-sb-feedback="keterangan:required">keterangan is required.</div>
        </div>
            <button class="btn btn-lg" id="container-inpt" name="process" value="create" type="submit">save</button>
            <button class="btn btn-lg" id="container-inptt" name="process" value="cancel" type="submit">cancel</button>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>