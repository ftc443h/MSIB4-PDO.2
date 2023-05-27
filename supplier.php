<?php
$sesiSupplier = $_SESSION['MEMBER'];
$roleSupplier = $sesiSupplier['role'];
if(isset($sesiSupplier) && ($roleSupplier == 'supplier' || $roleSupplier == 'admin')){
$objSupplier = new Supplier();
$dataSupplier = $objSupplier->supplierItems();
?>

<img class="container-backround" src="assets/img/Backround.png" />

<h1 class="container-DTProduct1">Supplier List</h1>
<?php
    if(isset($sesiSupplier) && ($roleSupplier == 'supplier')){
?>
<a href="index.php?halaman=supplier_from" class="btn btn-lg" id="container-inptCreate">create</a>
<?php } ?>
<table id="container-DFdata" class="table table-hover datatable">
     <thead>
        <tr class="container-conts">
            <th class="container-dpro">No</th>
            <th class="container-dpro">Name</th>
            <th class="container-dpro">Telephone</th>
            <th class="container-dpro">Email</th>
            <th class="container-dpro">Address</th>
            <?php
            if(isset($sesiSupplier) && ($roleSupplier == 'admin')){
            ?>
            <th class="container-dpro">Action</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($dataSupplier as $supplier){
        ?>
        <tr>
            <td class="container-tdPro">
                <?= $no ?>
            </td>
            <td class="container-tdPro">
                <?= $supplier['nama'] ?>
            </td>
            <td class="container-tdPro">
                <?= $supplier['telepon'] ?>
            </td>
            <td class="container-tdPro">
                <?= $supplier['email'] ?>
            </td>
            <td class="container-tdPro">
                <?= $supplier['alamat'] ?>
            </td>
            <?php
            if(isset($sesiSupplier) && ($roleSupplier == 'admin')){
            ?>
            <td class="container-tdPro">
                <form class="container-fromIconsPr" method="POST" action="controller/Supplier_Controller.php">
                    <a class="contaier-ViewProduct" href="index.php?halaman=supplier_view&id=<?= $supplier['id'] ?>" title="View">
                        <i id="container-view" class="bi bi-eye-fill"></i>
                    </a>
                    <a class="contaier-EditProduct" href="index.php?halaman=supplier_edit&edit=<?= $supplier['id'] ?>" title="Edit">
                        <i id="container-edit" class="bi bi-pencil-fill"></i>
                    </a>
                    <button class="button-delet" onclick="return confirm('Are You Sure Delete The Data')" name="process"
                        type="submit" value="delete" title="Delete">
                        <i id="container-delete" class="bi bi-trash-fill"></i>
                    </button>
                    <input type="hidden" name="delete" value="<?= $supplier['id'] ?>" />
                </form>
            </td>
            <?php }?>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>

<?php
}else{
    include_once 'acess_denied.php';
}
?>