<section class="section dashboard">
    <div class="row">
        <img class="container-backround" src="assets/img/Backround.png" />
        <?php
        if(isset($dtaSesi) && ($roleUser == 'pelanggan')){
        ?>
        <marquee direction="right" style="color: #245953;" behavior="alternate" scrolldelay="100">
            <h2 style="font-size: 24px; font-weight: bold;
        margin-top: 20px; font-family: 'Microsoft Sans Serif'; cursor:grabbing;">
                Welcome To Arch Shop Indonesia
            </h2>
        </marquee>
        <?php } ?>
        <section class="section dashboard">
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <!-- Start Looping Database -->

                    <?php
                    $mysql = "select produk.*, jenis.nama as kategori
                          from produk inner join jenis on jenis.id = produk.jenis_id";
                    $product = $cons->query($mysql);
                    foreach ($product as $product_me){

                    ?>

                    <div class="col">
                        <?php
                        if(isset($dtaSesi) && ($roleUser == 'pelanggan')){
                        ?>
                        <div id="container-prdk" class="card">
                            <img id="container-imgProduct" src="assets/img/<?= $product_me['foto'] ?>" class="card-img-top" alt="#" />
                            <div class="card-body">
                                <h5 id="container-productH5" class="card-title">
                                    <?= $product_me['nama'] ?>
                                </h5>
                                <p id="container-pragf" class="card-title">
                                    Stock &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <?= $product_me['stok'] ?>
                                    <br />Price &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : Rp. <?=  number_format($product_me['harga'],0,',','.') ?>
                                    <br />Category &nbsp &nbsp &nbsp: <?= $product_me['kategori'] ?>
                                </p>
                                <a id="container-buttonBuy" href="index.php?halaman=order" class="btn">Buy</a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </div>
</section>

<?php
if(isset($dtaSesi) && ($roleUser == 'pelanggan')){
?>
<nav class="container-Next" aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">Previous</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a id="container-Anext" class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
<?php } ?>