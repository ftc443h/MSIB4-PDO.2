<?php

class Jenis{

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

    public function productItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from jenis";
        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataPro = $data->fetchAll();
        return $dataPro;

    }

    public function pelangganItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from pelanggan";
        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataPelanggano = $data->fetchAll();
        return $dataPelanggano;

    }

    public function supplierItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from supplier";
        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataSupplier = $data->fetchAll();
        return $dataSupplier;

    }

    public function suplaiItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from suplai_barang";
        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataSuplai = $data->fetchAll();
        return $dataSuplai;

    }


    /* End Member 3 Method CRUD */

}

?>