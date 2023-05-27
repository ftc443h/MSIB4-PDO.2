<?php

/* Menangkap Request ID Edit Data Product */

$edit = $_REQUEST['edit'];
if(!empty($edit)){
    $modelSupplier = new Supplier();
    $SupplierEdit = $modelSupplier->getSupplier($edit);
}else{
    $SupplierEdit = [];
}

?>

<div id="cont-divPros" class="container px-5 my-5">
    <h1 class="contaier-crtprod">create supplier</h1>
    <form method="POST" action="controller/Supplier_Controller.php" class="container-fromproc" id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $SupplierEdit['nama'] ?>" name="nama" id="supplierName" type="text" placeholder=" supplier name" data-sb-validations="required" />
            <label id="container-labexProduct" for="supplierName"> supplier name</label>
            <div class="invalid-feedback" data-sb-feedback="supplierName:required">supplier name is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $SupplierEdit['telepon'] ?>" name="telepon" id="telephoneSupplier" type="text" placeholder="Telephone Supplier" data-sb-validations="required" />
            <label id="container-labexProduct" for="telephoneSupplier">Telephone Supplier</label>
            <div class="invalid-feedback" data-sb-feedback="telephoneSupplier:required">Telephone Supplier is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $SupplierEdit['email'] ?>" name="email" id="emailSupplier" type="email" placeholder="Email Supplier" data-sb-validations="required,email" />
            <label id="container-labexProduct" for="emailSupplier">Email Supplier</label>
            <div class="invalid-feedback" data-sb-feedback="emailSupplier:required">Email Supplier is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailSupplier:email">Email Supplier Email is not valid.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" value="<?= $SupplierEdit['alamat'] ?>" name="alamat" id="addressSupplier" type="text" placeholder="Address Supplier" data-sb-validations="required" />
            <label id="container-labexProduct" for="addressSupplier">Address Supplier</label>
            <div class="invalid-feedback" data-sb-feedback="addressSupplier:required">Address Supplier is required.</div>
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