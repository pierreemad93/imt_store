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
//           $productImage = $_FILES['productimage']['name'];
//           $productType = $_FILES['productimage']['type'];
//           $productTmp = $_FILES['productimage']['tmp_name'];
//           $productsize = $_FILES['productimage']['size'];
//           $productPath = rand(0, 1000) . '_' . $productImage;
//           move_uploaded_file($productTmp, "assets\images\products\\" . $productPath);
//           // list of allowed types to upload
//           $imageAllowedExtension = array('jpeg', 'jpg', 'png');
//           //get imageExtension
//           $imageExtension = strtolower(end(explode('.', $productImage)));
           //End upload image
           $productPath= 'test';
           $addedBy = 'admin' ;
           $stmt = $con->prepare('INSERT INTO products( productname ,productprice , path , addedby , productdate) VALUES ( ? , ? ,? , ?,now())');
           $stmt->execute(array($productName, $productPrice, $productPath , $addedBy));
       }
   }else{
       echo  "CSV Only" ;
   }
}else{
    echo 'error' ;
}