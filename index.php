<?php session_start(); ?><?php include "admin/connect.php" ?><?php include "include/header.php"; ?><?php include "include/navbar.php"; ?>    <div role="main" class="main shop py-4">        <div class="container">            <div class="row">                <div class="col-lg-3">                    <?php include "include/sidebar.php" ?>                </div>                <!--Start Content-->                <div class="col-lg-9">                    <?php                    $stmt = $con->prepare("SELECT * FROM products");                    $stmt->execute();                    $rows = $stmt->fetchAll();                    ?>                    <div class="masonry-loader masonry-loader-showing">                        <div class="row products product-thumb-info-list" data-plugin-masonry                             data-plugin-options="{'layoutMode': 'fitRows'}">                            <?php foreach ($rows as $row) { ?>                                <div class="col-sm-6 col-lg-4 product">                                    <?php if (!empty($row['percentage'])) { ?>                                        <a href="product.php">                                            <span class="onsale">Sale!</span>                                        </a>                                    <?php } else { ?>                                        <a><span class=""></span></a>                                    <?php } ?>                                    <span class="product-thumb-info border-0"><!--											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->                                        <!--												<span class="text-uppercase text-1">Add to Cart</span>-->                                        <!--											</a>-->											<a href="product.php?do=<?php echo $row['productid']?>">												<span class="product-thumb-info-image">													<img alt="" class="img-fluid" src="admin/assets/images/products/<?php echo $row['path']?>">												</span>											</a>											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">												<a href="product.php">													<h4 class="text-4 text-primary"><?php echo $row['productname']?></h4>													<span class="price">                                                         <?php if (!empty($row['percentage'])) { ?>                                                             <del><span class="amount"><?php echo $row['productprice']?> EGP</span></del>                                                             <ins><span class="amount text-dark font-weight-semibold"><?php echo $row['percentage']?> EGP</span></ins>                                                         <?php  }else{?>                                                          <ins><span class="amount text-dark font-weight-semibold"><?php echo $row["productprice"]?> EGP</span></ins>                                                         <?php                                                         } ?>													</span>												</a>											</span>										</span>                                </div>                            <?php } ?>                        </div>                    </div>                </div>                <!--End Content-->            </div>        </div>    </div><?php include "include/footer.php" ?>    </div><?php include "include/scripts.php" ?>