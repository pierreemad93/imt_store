<?php
include "../admin/connect.php";
$liveSearch = $_POST['livesearch'];
if (!empty($liveSearch)) {
    $stmt = $con->prepare('SELECT * FROM products WHERE productname LIKE :keyword');
    $stmt->bindValue(':keyword', '%' . $liveSearch . '%');
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $row) {
        echo $row['productname'];
    }

}