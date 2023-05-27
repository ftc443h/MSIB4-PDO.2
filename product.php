<?php
$sesiMember = $_SESSION['MEMBER'];
$roleProduct = $sesiMember['role'];
if(isset($sesiMember) && ($roleProduct == 'admin')){
$objData = new Product();
$dataPro = $objData->productItems();
?>

<img class="container-backround" src="assets/img/Backround.png" />

<h1 class="container-DTProduct1">Product List</h1>

<a href="index.php?halaman=product_from" class="btn btn-lg" id="container-inptCreate">create</a>

<table id="container-DFdata" class="table table-hover datatable">
    <thead>
        <tr class="container-conts">
            <th class="container-dpro">No</th>
            <th class="container-dpro">Code</th>
            <th class="container-dpro">Name</th>
            <th class="container-dpro">Price</th>
            <th class="container-dpro">Stock</th>
            <th class="container-dpro">Foto</th>
            <th class="container-dpro">Category</th>
            <th class="container-dpro">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($dataPro as $data){
        ?>
        <tr>
            <td class="container-tdPro">
                <?= $no ?>
            </td>
            <td class="container-tdPro">
                <?= $data['kode'] ?>
            </td>
            <td class="container-tdPro">
                <?= $data['nama'] ?>
            </td>
            <td class="container-tdPro">
                Rp. <?= number_format($data['harga'],0,',','.') ?>
            </td>
            <td class="container-tdPro">
                <?= $data['stok'] ?>
            </td>
            <td class="container-tdPro">
                <img class="container-FTO" src="assets/img/<?= $data['foto']?>" />
            </td>
            <td class="container-tdPro">
                <?= $data['kategori'] ?>
            </td>
            <td class="container-tdPro">
                <form class="container-fromIconsPr" method="POST" action="controller/Product_Controller.php">
                    <a class="contaier-ViewProduct" href="index.php?halaman=product_view&id=<?= $data['id'] ?>" title="View">
                        <i id="container-view" class="bi bi-eye-fill"></i>
                    </a>
                    <a class="contaier-EditProduct" href="index.php?halaman=product_edit&edit=<?= $data['id'] ?>" title="Edit">
                        <i id="container-edit" class="bi bi-pencil-fill"></i>
                    </a>
                    <button class="button-delet" onclick="return confirm('Are You Sure Delete The Data')" name="process"
                        type="submit" value="delete" title="Delete">
                        <i id="container-delete" class="bi bi-trash-fill"></i>
                    </button>
                    <input type="hidden" name="delete" value="<?= $data['id'] ?>" />
                </form>
            </td>
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