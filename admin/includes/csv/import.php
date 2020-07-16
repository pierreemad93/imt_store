<?php
include  "../../connect.php";
if (!empty($_FILES['importproduct']['name'])){
   $output = "";
   $allowed_ext= array("csv");
   $extension= end(explode("." , $_FILES['importproduct']['name']));
   if (in_array($extension, $allowed_ext)){
       $fileData =fopen($_FILES['importproduct']['tmp_name'] , 'r');
       fgetcsv($fileData);
       while ($row = fgetcsv($fileData)){
           $productName = $row[1];
           $productPrice = $row[2] ;
           $productPath= 'test';
           $addedBy = 'admin' ;
           $stmt = $con->prepare('INSERT INTO products( productname ,productprice , path , addedby) VALUES ( ? , ? ,? , ?) ');
           $stmt->execute(array($productName, $productPrice, $productPath , $addedBy));
       }
   }else{
       echo  "CSV Only" ;
   }
}else{
    echo 'error' ;
}