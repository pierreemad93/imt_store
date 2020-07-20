<?php session_start(); ?>
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
                    <form action="" method="post">
                        <div class="input-group mb-3 pb-1">
                            <input type="text" class="form-control text-1" placeholder="Search Product here"
                                   name="livesearch" id="live_search" autocomplete="off">
                        </div>
                    </form>
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}" id="result">

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