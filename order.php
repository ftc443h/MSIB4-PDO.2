<?php
$sesiOrder = $_SESSION['MEMBER'];
$roleOrder = $sesiOrder['role'];
if(isset($sesiOrder) && ($roleOrder == 'admin')){
$objOrder = new Order_Model();
$dataOrder = $objOrder->OrderItems();
?>

<img class="container-backround" src="assets/img/Backround.png" />

<h1 class="container-DTProduct1">Customer List</h1>

<?php
    if(isset($sesiOrder) && ($roleOrder == 'admin')){
?>
<a href="index.php?halaman=customer_from" class="btn btn-lg" id="container-inptCreate">create</a>
<?php } ?>

<table id="container-DFdata" class="table table-hover datatable">
    <thead>
        <tr class="container-conts">
            <th class="container-dpro">No</th>
            <th class="container-dpro">Kode</th>
            <th class="container-dpro">Product_id</th>
            <th class="container-dpro">Pelanggan_id</th>
            <th class="container-dpro">Date</th>
            <th class="container-dpro">Jumlah</th>
            <th class="container-dpro">Keterangan</th>
            <?php
    if(isset($sesiOrder) && ($roleOrder == 'admin')){
            ?>
            <th class="container-dpro">Action</th>
            <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
    $no = 1;
    foreach($dataOrder as $order){
        ?>
        <tr>
            <td class="container-tdPro">
                <?= $no ?>
            </td>
            <td class="container-tdPro">
                <?= $order['kode'] ?>
            </td>
            <td class="container-tdPro">
                <?= $order['produk_id'] ?>
            </td>
            <td class="container-tdPro">
                <?= $order['pelanggan_id'] ?>
            </td>
            <td class="container-tdPro">
                <?= $order['tanggal'] ?>
            </td>
            <td class="container-tdPro">
                <?= $order['jumlah'] ?>
            </td>
            <td class="container-tdPro">
                <?= $order['keterangan'] ?>
            </td>
            <?php
        if(isset($sesiOrder) && ($roleOrder == 'admin')){
            ?>
            <td class="container-tdPro">
                <form class="container-fromIconsPr" method="POST" action="controller/Customer_Controller.php">
                    <a class="contaier-ViewProduct" href="index.php?halaman=order_view&id=<?= $order['id'] ?>" title="View">
                        <i id="container-view" class="bi bi-eye-fill"></i>
                    </a>
                    <a class="contaier-EditProduct" href="index.php?halaman=oder_edit&edit=<?= $order['id'] ?>" title="Edit">
                        <i id="container-edit" class="bi bi-pencil-fill"></i>
                    </a>
                    <button class="button-delet" onclick="return confirm('Are You Sure Delete The Data')" name="process"
                        type="submit" value="delete" title="Delete">
                        <i id="container-delete" class="bi bi-trash-fill"></i>
                    </button>
                    <input type="hidden" name="delete" value="<?= $order['id'] ?>" />
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