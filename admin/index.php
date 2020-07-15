<?php session_start(); ?>
<?php include "connect.php" ?>
<?php include "includes/header.php" ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPass = sha1($password);
    //Check IF user exist at database
    $stmt = $con->prepare('SELECT * FROM users WHERE username=? AND password=? AND groupid=1 LIMIT 1');
    $stmt->execute(array($username, $hashedPass));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();
    //if count > 0 this mean the database contain information about this record
    if ($count == 1) {
        $_SESSION['Username'] = $username; // Register ssesion name
        $_SESSION['ID'] = $row['id'];  // Register session ID
        header('location:dashboard.php');//redirect to dashboard page
        exit();
    }
}
?>
<!-- start: BODY -->
<body class="login">
<!-- start: LOGIN -->
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <!--        <div class="logo margin-top-30">-->
        <!--            <img src="assets/images/logo.png" alt="Clip-Two"/>-->
        <!--        </div>-->
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <form class="form-login" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <fieldset>
                    <legend>
                        Sign in to admin panel account
                    </legend>
                    <p>
                        Please enter your name and password to log in.
                    </p>
                    <div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
                    </div>
                    <div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password"
                                           placeholder="Password">
									<i class="fa fa-lock"></i>
								</span>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                &copy; <span class="current-year"></span><span class="text-bold text-uppercase">IMT Store</span>.
                <span>All rights reserved</span>
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- end: LOGIN BOX -->
    </div>
</div>
<!-- end: LOGIN -->
</div>
<?php include "includes/scripts.php" ?>
