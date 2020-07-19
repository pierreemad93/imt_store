<?php
include  "../../connect.php";
if (!empty($_FILES['importproduct']['name'])){
   $output = "";
   $allowed_ext= array("csv");
   $extension= end(explode("." , $_FILES['importproduct']['name']));
   if (in_array($extension, $allowed_ext)){
       //$fileData=file_put_contents($_FILES['importproduct']['tmp_name'] , FILE_APPEND);
      $fileData =fopen($_FILES['importproduct']['tmp_name'] , 'r' , FILE_APPEND);
       fgetcsv($fileData);
       while ($row = fgetcsv($fileData)){
           $productName = $row[1];
           $productPrice = $row[2] ;
           $productPath= 'test';
           $precentage = $row[4] ;
           $descreption =  $row[5] ;
           $addedBy = 'admin' ;
           $stmt = $con->prepare('INSERT INTO products(productname ,productprice,path ,percentage,description,addedby,productdate) VALUES ( ? , ? ,? , ?, ? , ?,now())');
           $stmt->execute(array($productName, $productPrice, $productPath ,$precentage ,$descreption , $addedBy));
       }
   }else{
       echo  "CSV Only" ;
   }
}else{
    echo 'error' ;
}