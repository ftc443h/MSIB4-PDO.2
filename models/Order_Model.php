<?php

class Order_Model{

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

    public function OrderItems(){

        /* Start Mysql Data Produk + Jenis */

        // $mysql = "select kode, nama, produk_id, jumlah, tanggal, email, foto, alamat
        //from pelanggan
        //inner join pesanan on pesanan.id = pelanggan.id";

        $mysql = "select * from pesanan";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataOrder = $data->fetchAll();
        return $dataOrder;

    }

    public function getOrder($id){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from pesanan where id = ?";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute([$id]);
        $dataOrder = $data->fetch();
        return $dataOrder;

    }

    public function create($CustomerDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "insert into pelanggan (nama,telepon,email,foto,alamat) values
                 (?,?,?,?,?)";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($CustomerDT);

    }

    public function edit($CustomerDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "update pelanggan set nama=?,telepon=?,email=?,foto=?,alamat=? where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($CustomerDT);

    }

    public function delete($CustomerDT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "delete from pelanggan where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($CustomerDT);

    }

    /* End Member 3 Method CRUD */

}

?>