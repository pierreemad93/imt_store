<?php session_start(); ?>
<?php include "admin/connect.php" ?>
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>
    <div role="main" class="main shop py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php include "include/sidebar.php" ?>
                </div>
                <!--Start Content-->
                <div class="col-lg-9">
                    <!--Start Live search-->
                    <form action="" method="post">
                        <div class="input-group mb-3 pb-1">
                            <input type="text" class="form-control text-1" placeholder="Search Product here" name="livesearch" id="live_search" autocomplete="off">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-dark text-1 p-2">
                                    <i class="fas fa-search m-2"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!--End Live search-->
                    <div class="masonry-loader masonry-loader-showing">
                        <div id="result" class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

                        </div>
                    </div>
                </div>
                <!--End Content-->
            </div>
        </div>
    </div>
<?php include "include/footer.php" ?>
    </div>
<?php include "include/scripts.php" ?>