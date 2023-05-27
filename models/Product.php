<?php

class Product{

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

        $mysql = "select produk.*, jenis.nama as kategori
                  from produk inner join jenis on jenis.id = produk.jenis_id
                  order by produk.id desc";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataPro = $data->fetchAll();
        return $dataPro;

    }

    public function getProduct($id){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select produk.*, jenis.nama as kategori
                  from produk inner join jenis on jenis.id = produk.jenis_id where produk.id = ?";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute([$id]);
        $dataPro = $data->fetch();
        return $dataPro;

    }

    public function create($dataCrt){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "insert into produk (kode,nama,harga,stok,foto,jenis_id) values
                 (?,?,?,?,?,?)";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($dataCrt);

    }

    public function edit($dataCrt){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "update produk set kode=?,nama=?,harga=?,stok=?,foto=?,jenis_id=? where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($dataCrt);

    }

    public function delete($dataCrt){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "delete from produk where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($dataCrt);

    }

    /* End Member 3 Method CRUD */

}

?>