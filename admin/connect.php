<?php
$dsn='mysql:host=localhost;dbname=imt_store';
$user='root';
$pass='';
$option= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try{
    $con=new PDO($dsn ,$user, $pass ,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    // echo 'connect';
}catch (PDOException $e){
    echo 'faild to connect'. $e;
}