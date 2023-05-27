<?php

class Suplai_Model{

    /* Start Member 1 Var Connection */

    private $connection;

    /* End Member 1 Var Connection */


    /* Start Member 2 Construct */

    public function __construct()
    {
        global $cons;
        $this->connection = $cons;
    }

    /* End Member 2 Construct */

    /* Start Member 3 Method CRUD */

    public function suplaiItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from suplai_barang";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $datasuplai = $data->fetchAll();
        return $datasuplai;

    }

    public function getSuplai($id){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from suplai_barang where id = ?";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute([$id]);
        $datasuplai = $data->fetch();
        return $datasuplai;

    }

    public function create($SuplaiDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "insert into supplier (kode_suplai,tanggal,produk_id,supplier_id,jumlah,keterangan) values
                 (?,?,?,?,?,?)";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SuplaiDT);

    }

    public function edit($SuplaiDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "update supplier set kode_produk=?,tanggal=?,produk_id=?,supplier_id=?,jumlah=?,keterangan=? where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SuplaiDT);

    }

    public function delete($SuplaiDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "delete from supplier where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SuplaiDT);

    }

    /* End Member 3 Method CRUD */

}

?>