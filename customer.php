<?php
$sesiCustomer = $_SESSION['MEMBER'];
$roleCustomer = $sesiCustomer['role'];
if(isset($sesiCustomer) && ($roleCustomer == 'pelanggan' || $roleCustomer == 'admin')){
$objPelanggan = new Customer();
$dataPelanggano = $objPelanggan->pelangganItems();
?>

<img class="container-backround" src="assets/img/Backround.png" />

<h1 class="container-DTProduct1">Customer List</h1>

<?php
    if(isset($sesiCustomer) && ($roleCustomer == 'pelanggan')){
?>
<a href="index.php?halaman=customer_from" class="btn btn-lg" id="container-inptCreate">create</a>
<?php } ?>

<table id="container-DFdata" class="table table-hover datatable">
     <thead>
        <tr class="container-conts">
            <th class="container-dpro">No</th>
            <th class="container-dpro">Name</th>
            <th class="container-dpro">Telephone</th>
            <th class="container-dpro">Photo</th>
            <th class="container-dpro">Email</th>
            <th class="container-dpro">Address</th>
            <?php
            if(isset($sesiCustomer) && ($roleCustomer == 'admin')){
            ?>
            <th class="container-dpro">Action</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($dataPelanggano as $pelanggan){
        ?>
        <tr>
            <td class="container-tdPro">
                <?= $no ?>
            </td>
            <td class="container-tdPro">
                <?= $pelanggan['nama'] ?>
            </td>
            <td class="container-tdPro">
                <?= $pelanggan['telepon'] ?>
            </td>
            <td class="container-tdPro">
                <?= $pelanggan['foto'] ?>
            </td>
            <td class="container-tdPro">
                <?= $pelanggan['email'] ?>
            </td>
            <td class="container-tdPro">
                <?= $pelanggan['alamat'] ?>
            </td>
            <?php
            if(isset($sesiCustomer) && ($roleCustomer == 'admin')){
            ?>
            <td class="container-tdPro">
                <form class="container-fromIconsPr" method="POST" action="controller/Customer_Controller.php">
                    <a class="contaier-ViewProduct" href="index.php?halaman=customer_view&id=<?= $pelanggan['id'] ?>" title="View">
                        <i id="container-view" class="bi bi-eye-fill"></i>
                    </a>
                    <a class="contaier-EditProduct" href="index.php?halaman=customer_edit&edit=<?= $pelanggan['id'] ?>" title="Edit">
                        <i id="container-edit" class="bi bi-pencil-fill"></i>
                    </a>
                    <button class="button-delet" onclick="return confirm('Are You Sure Delete The Data')" name="process"
                        type="submit" value="delete" title="Delete">
                        <i id="container-delete" class="bi bi-trash-fill"></i>
                    </button>
                    <input type="hidden" name="delete" value="<?= $pelanggan['id'] ?>" />
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