<div id="cont-divProd" class="container px-5 my-5">
    <h1 class="contaier-crtprod">create customer</h1>
    <form method="POST" action="controller/Customer_Controller.php" id="contactForm" class="container-fromproc" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" id="customersName" type="text" placeholder="Customers name" data-sb-validations="required" />
            <label id="container-labexProduct" for="customersName">Customers name</label>
            <div class="invalid-feedback" data-sb-feedback="customersName:required">Customers name is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="telepon" id="telephoneCustomer" type="text" placeholder="telephone customer" data-sb-validations="required" />
            <label id="container-labexProduct" for="telephoneCustomer">telephone customer</label>
            <div class="invalid-feedback" data-sb-feedback="telephoneCustomer:required">telephone customer is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
            <label id="container-labexProduct" for="emailAddress">Email Address</label>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="foto" id="customerPhoto" type="text" placeholder="Customer Photo" data-sb-validations="required" />
            <label id="container-labexProduct" for="customerPhoto">Customer Photo</label>
            <div class="invalid-feedback" data-sb-feedback="customerPhoto:required">Customer Photo is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="alamat" id="customerAddress" type="text" placeholder="customer address" data-sb-validations="required" />
            <label id="container-labexProduct" for="customerAddress">customer address</label>
            <div class="invalid-feedback" data-sb-feedback="customerAddress:required">customer address is required.</div>
        </div>
            <button class="btn btn-lg" id="container-inpt" name="process" value="create" type="submit">save</button>
            <button class="btn btn-lg" id="container-inptt" name="process" value="cancel" type="submit">cancel</button>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>