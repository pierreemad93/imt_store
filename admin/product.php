<?php
$do = isset($_GET['do']) ? $_GET['do'] : 'manage';
//if the page is main page
if ($do == 'manage') {
    ?>
    <?php
    session_start();
    include "connect.php";
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
                                <a type="button" class="btn btn-wide btn-success"><i class="fa fa-file-excel-o"></i>
                                    Import CSV</a>
                            </div>
                        </div>
                    </section>
                    <!-- start: STRIPED ROWS -->
                    <div class="container-fluid container-fullw">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover" id="sample-table-2">
                                    <thead>
                                    <tr>
                                        <th class="center">Photo</th>
                                        <th>Full Name</th>
                                        <th class="hidden-xs">Role</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class="hidden-xs">Phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="center"><img src="assets/images/avatar-1.jpg" class="img-rounded"
                                                                alt="image"></td>
                                        <td>Peter Clark</td>
                                        <td class="hidden-xs">UI Designer</td>
                                        <td class="hidden-xs">
                                            <a href="#" rel="nofollow" target="_blank">
                                                peter@example.com
                                            </a></td>
                                        <td class="hidden-xs">(641)-734-4763</td>
                                        <td class="center">
                                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                <a href="#" class="btn btn-transparent btn-xs" tooltip-placement="top"
                                                   tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-transparent btn-xs tooltips"
                                                   tooltip-placement="top" tooltip="Share"><i
                                                            class="fa fa-share"></i></a>
                                                <a href="#" class="btn btn-transparent btn-xs tooltips"
                                                   tooltip-placement="top" tooltip="Remove"><i
                                                            class="fa fa-times fa fa-white"></i></a>
                                            </div>
                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                <div class="btn-group" dropdown="">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                            dropdown-toggle="">
                                                        <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Share
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                Remove
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
    session_start();
    include "connect.php";
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
                                                        <textarea class="ckeditor form-control" cols="10" rows="10" style="visibility: hidden; display: none;" name="productdesc"></textarea>
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
         jQuery(document).ready(function() {
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
        $productDesc=$_POST['productdesc'];
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

        if (is_numeric($productPrice)) {
            $formErrors[] = 'Product price must be number';
        }
        if (strlen($productPrice)) {
            $formErrors[] = 'Product price must be number';
        }

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
            $check = checkItem("Username", "users", $user);
            if ($check == 1) {
                $theMsg = "<div class='alert alert-danger'>this user is exist</div>";
                redirectHome($theMsg, 'back');
            } else {
                $stmt = $con->prepare('INSERT INTO users (	productname ,productprice , description ,addedby,Date) VALUES ( ? , ? , ? , ?,now())');
                $stmt->execute(array($productName, $productPrice, $productPath, $productDesc));
                $count = $stmt->rowCount();
                $theMsg = '<div class="alert alert-success">' . $count . 'Insert Record</div>';
                redirectHome($theMsg, 'back');
            }
        }

    }
} elseif ($do == 'edit') {
    echo 'Welcome you are in ' . $do . ' category page';
} elseif ($do == 'update') {
    echo 'Welcome you are in ' . $do . ' category page';
} elseif ($do == 'delete') {
    echo 'Welcome you are in ' . $do . ' category page';
} else {
    echo 'Error';
}
?>