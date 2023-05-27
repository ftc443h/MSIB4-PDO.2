<?php

class Member{

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

    public function checkLogin($dtLogin){

        /* Start Mysql Data Produk + Jenis */

        $mysql = "select * from member where username = ? and
                password = SHA1(MD5(?))";

        /* End Mysql Data Produk + Jenis */

        $data = $this->connection->prepare($mysql);
        $data->execute($dtLogin);
        $dataPro = $data->fetch();
        return $dataPro;

    }

}

?>