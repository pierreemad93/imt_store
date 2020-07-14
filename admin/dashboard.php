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
                            <h1 class="mainTitle">Dashboard</h1>
                            <span class="mainDescription">overview &amp; stats </span>
                        </div>
                    </div>
                </section>
                <!-- end: DASHBOARD TITLE -->
                <!-- start: FEATURED BOX LINKS -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                                    <h2 class="StepTitle">Manage Users</h2>
                                    <p class="text-small">
                                        To add users, you need to be signed in as the super user.
                                    </p>
                                    <p class="links cl-effect-1">
                                        <a href>
                                            view more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                    <h2 class="StepTitle">Manage Orders</h2>
                                    <p class="text-small">
                                        The Manage Orders tool provides a view of all your orders.
                                    </p>
                                    <p class="cl-effect-1">
                                        <a href>
                                            view more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                                    <h2 class="StepTitle">Manage Database</h2>
                                    <p class="text-small">
                                        Store, modify, and extract information from your database.
                                    </p>
                                    <p class="links cl-effect-1">
                                        <a href>
                                            view more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: FEATURED BOX LINKS -->
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</div>
<?php include "includes/scripts.php" ?>
