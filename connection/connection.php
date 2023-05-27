<?php

/* Start Connect To A MySQL Database Using Driver Invocation */

$connection = 'mysql:dbname=dbtoko_online;host=localhost';
$username = 'fatchan';
$password = 'fatchanUser#09';

/* End Connect To A MySQL Database Using Driver Invocation */

try {

    /* Start Messeger Status Success Connection Database */

    $cons = new PDO($connection, $username, $password);
    $cons->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cons->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

    //End Messeger Status Success Connection Database
}
catch( PDOException $Exception ) {

    /* Start Messeger Status Failed Connection Database */

    echo "Failed Connection Database" .$Exception->getMessage();

    /* End Messeger Status Failed Connection Database */
}
?>