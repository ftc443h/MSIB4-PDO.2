<?php

class Supplier{

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

    public function supplierItems(){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from supplier";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute();
        $dataSupplier = $data->fetchAll();
        return $dataSupplier;

    }

    public function getSupplier($id){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from supplier where id = ?";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute([$id]);
        $dataSupplier = $data->fetch();
        return $dataSupplier;

    }

    public function create($SupplirDTT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "insert into supplier (nama,telepon,email,alamat) values
                 (?,?,?,?)";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SupplirDTT);

    }

    public function edit($SupplirDTT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "update supplier set nama=?,telepon=?,email=?,alamat=? where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SupplirDTT);

    }

    public function delete($SupplirDTT){

        /* Start Mysql Data Produk + Jenis + Create */

        $mysql = "delete from supplier where id=?";

        /* End Mysql Data Produk + Jenis + Create */

        $data = $this->connection->prepare($mysql);
        $data->execute($SupplirDTT);

    }

    /* End Member 3 Method CRUD */

}

?>