<?php
$do = isset($_GET['do']) ? $_GET['do'] : 'manage';
include "connect.php";
session_start();
include "includes/functions.php";
//if the page is main page
if ($do == 'manage') {
    ?>
    <?php
    include "includes/header.php";
    ?>
    <div id="app">
        <?php include "includes/sidebar.php" ?>
        <div class="app-content">
            <?php include "includes/topnav.php" ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: DASHBOARD TITLE -->
                    <section id="page-title" class="padding-top-15 padding-bottom-15">
                        <div class="row">
                            <div class="col-sm-7 col-md-7">
                                <h1 class="mainTitle">All Products</h1>
                            </div>
                            <div class="col-sm-5 col-md-5">
                                <a type="button" href="?do=add" class="btn btn-wide btn-primary"><i
                                            class="fa fa-plus-square"></i> add Product</a>
                                <a type="button" class="btn btn-wide btn-success" href="?do=excel"><i class="fa fa-file-excel-o"></i>
                                    Excel Sheet</a>
                            </div>
                        </div>
                    </section>
                    <?php
                    $stmt = $con->prepare("SELECT * FROM products");
                    $stmt->execute();
                    $rows = $stmt->fetchAll();
                    ?>
                    <!-- start: STRIPED ROWS -->
                    <div class="container-fluid container-fullw">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover" id="sample-table-2">
                                    <thead>
                                    <tr>
                                        <th class="center">Photo</th>
                                        <th>Product name</th>
                                        <th>Product Price</th>
                                        <th>Offers</th>
                                        <th class="center">controls</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <td class="center"><img src="assets/images/products/<?php echo $row['path'] ?>" class="img-rounded" alt="image" style="height:15vh"></td>
                                            <td><?php echo $row['productname'] ?></td>
                                            <td><?php echo $row['productprice'] ?></td>
                                            <td>
                                                <?php if(empty($row['percentage'])){
                                                    echo "<span class='label label-danger'>No offers</span>";
                                                }else{
                                                    echo "<span class='label label-success'>offers</span>";
                                                }?>
                                            </td>
                                            <td class="center">
                                                <a class="btn btn-info"
                                                   href="product.php?do=show&productid=<?php echo $row['productid'] ?>"><i
                                                            class="fa fa-eye"></i></a>
                                                <a class="btn btn-warning"
                                                   href="product.php?do=edit&productid=<?php echo $row['productid'] ?>"><i
                                                            class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href="product.php?do=delete&productid=<?php echo $row['productid'] ?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- start: STRIPED ROWS -->
                    <!-- end: DASHBOARD TITLE -->
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/scripts.php" ?>
    <?php
} elseif ($do == 'add') { ?>
    <?php

    include "includes/header.php";
    ?>
    <div id="app">
        <?php include "includes/sidebar.php" ?>
        <div class="app-content">
            <?php include "includes/topnav.php" ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: DASHBOARD TITLE -->
                    <section id="page-title" class="padding-top-15 padding-bottom-15">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1 class="mainTitle">Add Product</h1>
                            </div>
                        </div>
                    </section>
                    <!-- end: DASHBOARD TITLE -->
                    <!-- start: Added Form -->
                    <div class="container-fluid container-fullw bg-white">
                        <form method="post" action="?do=insert" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <legend>
                                                    info
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Name<span class="symbol required"></span>
                                                            </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Add product name"
                                                                       name="productname" class="form-control">
                                                            </div>
                                                            <label>
                                                                Price<span class="symbol required"></span>
                                                            </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Add product price"
                                                                       name="productprice" class="form-control">
                                                            </div>
                                                            <label>
                                                                sale<span class=""></span>
                                                            </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="sale"
                                                                       name="productsale" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Image<span class="symbol required"></span>
                                                            </label>
                                                            <div class="form-group">
                                                                <input type="file" placeholder="Add product name"
                                                                       name="productimage">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>
                                                    Description
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="ckeditor form-control" cols="10" rows="10"
                                                                  style="visibility: hidden; display: none;"
                                                                  name="productdesc"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Add Product" class="btn btn-primary">
                            <a  class="btn btn-danger" href="product.php">Back</a>
                        </form>
                    </div>
                    <!-- end: Added Form -->
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
    </div>
    <script src="vendor/ckeditor/ckeditor.js"></script>
    <script src="vendor/ckeditor/adapters/jquery.js"></script>
    <script>
        jQuery(document).ready(function () {
            Main.init();
            Index.init();
        });
    </script>
    <?php include "includes/scripts.php" ?>

    <?php
} elseif ($do == 'insert') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productName = $_POST['productname'];
        $productPrice = $_POST['productprice'];
        $productDesc = $_POST['productdesc'];
        $productSale= empty($_POST['productsale'])?null:$_POST['productsale'];
        $addedBy = $_SESSION['Username'];
        //start upload image
        $productImage = $_FILES['productimage']['name'];
        $productType = $_FILES['productimage']['type'];
        $productTmp = $_FILES['productimage']['tmp_name'];
        $productsize = $_FILES['productimage']['size'];
        $productPath = rand(0, 1000) . '_' . $productImage;
        move_uploaded_file($productTmp, "assets\images\products\\" . $productPath);
        // list of allowed types to upload
        $imageAllowedExtension = array('jpeg', 'jpg', 'png');
        //get imageExtension
        $imageExtension = strtolower(end(explode('.', $productImage)));
        //End upload image
        $formErrors = array();
        if (strlen($productName) > 20) {
            $formErrors[] = 'Product name must be less than 20 character';
        }
        if (empty($productName)) {
            $formErrors[] = 'Product name must not be empty';
        }

//        if (is_numeric($productPrice)) {
//            $formErrors[] = 'Product price must be number';
//        }
//        if (strlen($productPrice)) {
//            $formErrors[] = 'Product price must be number';
//        }

        if (empty($productPrice)) {
            $formErrors[] = 'Product name must not be empty';
        }
        if (!empty($productImage) && !in_array($imageExtension, $imageAllowedExtension)) {
            $formErrors[] = 'Product image cant be .' . $imageExtension;
        }
        foreach ($formErrors as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
        if (empty($formErrors)) {
            // check if userinfo in database
            $check = checkItem("productname", "products", $productName);
            if ($check == 1) {
                $theMsg = "<div class='alert alert-danger'>this product is exist</div>";
                redirectHome($theMsg, 'back');
            } else {
                $stmt = $con->prepare('INSERT INTO products( productname ,productprice , path, percentage,description ,addedby,productdate) VALUES ( ? , ? ,? , ? , ?, ?,now())');
                $stmt->execute(array($productName, $productPrice, $productPath, $productSale, $productDesc, $addedBy));
                $count = $stmt->rowCount();
                header('Location:product.php?do=add');
            }
        }

    }
} elseif ($do == 'edit') {
    $productid = isset($_GET['productid']) && is_numeric($_GET['productid']) ? intval($_GET['productid']) : 0;
    $stmt = $con->prepare('SELECT * FROM products WHERE productid=?');
    $stmt->execute(array($productid));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();
    if ($count == 1) {
        // this condtion to count if userid in database show his data
        ?>
        <?php

        include "includes/header.php";
        ?>
        <div id="app">
            <?php include "includes/sidebar.php" ?>
            <div class="app-content">
                <?php include "includes/topnav.php" ?>
                <div class="main-content">
                    <div class="wrap-content container" id="container">
                        <!-- start: DASHBOARD TITLE -->
                        <section id="page-title" class="padding-top-15 padding-bottom-15">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1 class="mainTitle">Edit Product</h1>
                                </div>
                            </div>
                        </section>
                        <!-- end: DASHBOARD TITLE -->
                        <!-- start: Added Form -->
                        <div class="container-fluid container-fullw bg-white">
                            <form method="post" action="?do=update" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <legend>
                                                        info
                                                    </legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>
                                                                    Name<span class="symbol required"></span>
                                                                </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Add product name"
                                                                           name="productname" class="form-control"
                                                                           value="<?php echo $row['productname'] ?>">
                                                                    <input type="hidden" name="productid"
                                                                           class="form-control"
                                                                           value="<?php echo $row['productid'] ?>">
                                                                </div>
                                                                <label>
                                                                    Price<span class="symbol required"></span>
                                                                </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Add product price"
                                                                           name="productprice" class="form-control"
                                                                           value="<?php echo $row['productprice'] ?>">
                                                                </div>
                                                                <label>
                                                                    Sale<span></span>
                                                                </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Add product price"
                                                                           name="productsale" class="form-control"
                                                                           value="<?php echo $row['percentage'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>
                                                                    Image<span class="symbol required"></span>
                                                                </label>
                                                                <div class="form-group">
                                                                    <input type="file" placeholder="Add product name" name="productimage"  value="<?php echo $row['path'] ?>">
                                                                    <?php $_SESSION['PATH'] = $row['path']?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>
                                                        Description
                                                    </legend>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea class="ckeditor form-control" cols="10" rows="10"
                                                                      style="visibility: hidden; display: none;"
                                                                      name="productdesc"><?php echo $row['description'] ?></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Add Product" class="btn btn-primary">
                            </form>
                        </div>
                        <!-- end: Added Form -->
                    </div>
                </div>
            </div>
            <?php include "includes/footer.php" ?>
        </div>
        <script src="vendor/ckeditor/ckeditor.js"></script>
        <script src="vendor/ckeditor/adapters/jquery.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Index.init();
            });
        </script>
        <?php include "includes/scripts.php" ?>
    <?php }
} elseif ($do == 'update') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productid = $_POST['productid'];
        $productName = $_POST['productname'];
        $productPrice = $_POST['productprice'];
        $productDesc = $_POST['productdesc'];
        $productSale= empty($_POST['productsale'])?null:$_POST['productsale'];
        $addedBy = $_SESSION['Username'];
        //start upload image
        $productImage = $_FILES['productimage']['name'];
        $productType = $_FILES['productimage']['type'];
        $productTmp = $_FILES['productimage']['tmp_name'];
        $productsize = $_FILES['productimage']['size'];
        $productPath=rand(0, 1000) . '_' . $productImage;
       // $productPath = rand(0, 1000) . '_' . $productImage;
        move_uploaded_file($productTmp, "assets\images\products\\" . $productPath);
        // list of allowed types to upload
        $imageAllowedExtension = array('jpeg', 'jpg', 'png');
        //get imageExtension
        $imageExtension = strtolower(end(explode('.', $productImage)));
        //End upload image
        $formErrors = array();
        if (strlen($productName) > 20) {
            $formErrors[] = 'Product name must be less than 20 character';
        }
        if (empty($productName)) {
            $formErrors[] = 'Product name must not be empty';
        }

//        if (is_numeric($productPrice)) {
//            $formErrors[] = 'Product price must be number';
//        }
//        if (strlen($productPrice)) {
//            $formErrors[] = 'Product price must be number';
//        }

        if (empty($productPrice)) {
            $formErrors[] = 'Product name must not be empty';
        }
        if (!empty($productImage) && !in_array($imageExtension, $imageAllowedExtension)) {
            $formErrors[] = 'Product image cant be .' . $imageExtension;
        }
        foreach ($formErrors as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
        if (empty($formErrors)) {
            $stmt = $con->prepare('UPDATE  products SET  productname=? , productprice=? , path=? ,percentage=?, description=? ,addedby=? WHERE productid=?');
            $stmt->execute(array($productName, $productPrice, $productPath, $productSale ,$productDesc, $addedBy, $productid));
            $count = $stmt->rowCount();
            header('Location:product.php');
        }
    }
} elseif ($do == 'show') { ?>
    <?php
    include "includes/header.php";
    ?>
    <div id="app">
        <?php include "includes/sidebar.php" ?>
        <div class="app-content">
            <?php include "includes/topnav.php" ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: DASHBOARD TITLE -->
                    <section id="page-title" class="padding-top-15 padding-bottom-15">
                        <div class="row">
                            <div class="col-sm-7 col-md-7">
                                <h1 class="mainTitle">Product</h1>
                            </div>
                        </div>
                    </section>
                    <?php
                    $productid=$_GET['productid'];
                    $stmt = $con->prepare("SELECT * FROM products where productid=?");
                    $stmt->execute(array($productid));
                    $row = $stmt->fetch();
                    ?>
                    <!-- end: DASHBOARD TITLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
                                        <li class="active">
                                            <a data-toggle="tab" href="#panel_overview">
                                                Overview
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="panel_overview" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-sm-5 col-md-4">
                                                    <div class="user-left">
                                                        <div class="center">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="user-image">
                                                                    <div class="fileinput-new thumbnail"><img src="assets/images/products/<?php echo $row['path']?>" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-md-8">
                                                    <div class="panel panel-white" id="activities">
                                                        <div class="panel-heading border-light">
                                                            <h4 class="panel-title text-primary">Product Information</h4>
                                                            <paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
                                                        </div>
                                                        <div collapse="activities" ng-init="activities=false" class="panel-wrapper">
                                                            <div class="panel-body">
                                                                <table class="table table-condensed">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Product Name</td>
                                                                        <td>
                                                                            <a href="#"><?php echo $row['productname']?></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Price</td>
                                                                        <td><a href=""><?php echo  $row['productprice']?></a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="3">General information</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Product desctiption</td>
                                                                        <td><?php echo $row['description']?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Added By</td>
                                                                        <td><span class="label label-sm label-info">Administrator</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Added at</td>
                                                                        <td><span class=""><?php echo  $row['productdate']?></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <a href="product.php" class="btn btn-info "><i class="fa fa-arrow-left"></i> back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/scripts.php" ?>
    <?php
} elseif ($do == 'delete') {
    $productid=isset($_GET['productid'])&& is_numeric($_GET['productid'])?intval($_GET['productid']):0;
    $check=checkItem('productid' , 'products' , $productid);
    if ($check > 0){
        $stmt=$con->prepare('DELETE FROM products WHERE productid=?');
        $stmt->execute(array($productid));
        $theMsg="<div class='alert alert-success'>".$stmt->rowCount()."Record Deleted</div>";
        header('Location:product.php');
    }else{
        $theMsg="<div class='alert alert-warning'>This ID is Not Exist</div>";
        redirectHome($theMsg);
    }
}elseif ($do == 'excel') { ?>
    <?php

    include "includes/header.php";
    ?>
    <div id="app">
        <?php include "includes/sidebar.php" ?>
        <div class="app-content">
            <?php include "includes/topnav.php" ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: DASHBOARD TITLE -->
                    <section id="page-title" class="padding-top-15 padding-bottom-15">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1 class="mainTitle">Excel Sheets</h1>
                            </div>
                        </div>
                    </section>
                    <!-- end: DASHBOARD TITLE -->
                    <!-- start: Added Form -->
                    <div class="container-fluid container-fullw bg-white">
                        <form id="upload_csv" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <legend>
                                                    Import CSV
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                Import Sheet<span class="symbol required"></span>
                                                            </label>
                                                            <div class="form-group">
                                                                <input type="file" placeholder="Add product name" name="importproduct" id="importproduct">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Upload Products" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- end: Added Form -->
                </div>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('document').ready(function () {
            $('#upload_csv').on('submit',function (e) {
                e.preventDefault();
                $.ajax({
                    url:'includes/csv/import.php' ,
                    method: 'POST' ,
                    data :new FormData(this),
                    contentType:false ,
                    cache : false ,
                    processData:false ,
                    success:function (data) {
                        //console.log(data);
                    }
                });
            });
        });
    </script>
    <?php include "includes/scripts.php" ?>
<?php
}else {
    echo 'Error';
}
?>