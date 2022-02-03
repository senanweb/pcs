<?php
    $dns = 'mysql:host=localhost;dbname=store';
    $user = 'root';
    $pass = '';
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try{
        $con = new PDO ($dns,$user,$pass,$option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'connection done'; // test connection
       }
    catch(PDOException $e)
    {
        echo 'Failed To Connection' . $e->getMessage();
    }