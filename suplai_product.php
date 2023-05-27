<?php
$sesiSuplai = $_SESSION['MEMBER'];
$roleSuplai = $sesiSuplai['role'];
if(isset($sesiSuplai) && ($roleSuplai == 'supplier' || $roleSuplai == 'admin')){
$objsuplai = new Suplai_Model();
$datasuplai = $objsuplai->suplaiItems();
?>

<img class="container-backround" src="assets/img/Backround.png" />

<h1 class="container-DTProduct1">Supplier List</h1>
<?php
    if(isset($sesiSuplai) && ($roleSuplai == 'admin')){
?>
<a href="index.php?halaman=suplai_from" class="btn btn-lg" id="container-inptCreate">create</a>
<?php } ?>
<table id="container-DFdata" class="table table-hover datatable">
    <thead>
        <tr class="container-conts">
            <th class="container-dpro">No</th>
            <th class="container-dpro">kode_suplai</th>
            <th class="container-dpro">Date</th>
            <th class="container-dpro">Product_id</th>
            <th class="container-dpro">Supplier_id</th>
            <th class="container-dpro">Total</th>
            <th class="container-dpro">Keterangan</th>
            <?php
            if(isset($sesiSuplai) && ($roleSuplai == 'admin')){
            ?>
            <th class="container-dpro">Action</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($datasuplai as $suplai){
        ?>
        <tr>
            <td class="container-tdPro">
                <?= $no ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['kode_suplai'] ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['tanggal'] ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['produk_id'] ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['supplier_id'] ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['jumlah'] ?>
            </td>
            <td class="container-tdPro">
                <?= $suplai['keterangan'] ?>
            </td>
            <?php
            if(isset($sesiSuplai) && ($roleSuplai == 'admin')){
            ?>
            <td class="container-tdPro">
                <form class="container-fromIconsPr" method="POST" action="controller/Suplai_Controller.php">
                    <a class="contaier-ViewProduct" href="index.php?halaman=suplai_view&id=<?= $suplai['id'] ?>" title="View">
                        <i id="container-view" class="bi bi-eye-fill"></i>
                    </a>
                    <a class="contaier-EditProduct" href="index.php?halaman=suplai_edit&edit=<?= $suplai['id'] ?>" title="Edit">
                        <i id="container-edit" class="bi bi-pencil-fill"></i>
                    </a>
                    <button class="button-delet" onclick="return confirm('Are You Sure Delete The Data')" name="process"
                        type="submit" value="delete" title="Delete">
                        <i id="container-delete" class="bi bi-trash-fill"></i>
                    </button>
                    <input type="hidden" name="delete" value="<?= $suplai['id'] ?>" />
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