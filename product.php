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
                <div class="col-lg-9">
                    <?php
                    $do = isset($_GET['do']) && is_numeric($_GET['do']) ? intval($_GET['do']) : 0;
                    $stmt=$con->prepare('SELECT * FROM products WHERE productid=? ');
                    $stmt->execute(array($do));
                    $row= $stmt->fetch();
                    ?>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10}">
                                <div>
                                    <img alt="" height="300" class="img-fluid" src="admin/assets/images/products/<?php echo $row['path']?>">
                                </div>
<!--                                <div>-->
<!--                                    <img alt="" height="300" class="img-fluid" src="img/products/product-grey-7-2.jpg">-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <img alt="" height="300" class="img-fluid" src="img/products/product-grey-7-3.jpg">-->
<!--                                </div>-->
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="summary entry-summary">

                                <h1 class="mb-0 font-weight-bold text-7"><?php echo $row['productname']?></h1>

<!--                                <div class="pb-0 clearfix">-->
<!--                                    <div title="Rated 3 out of 5" class="float-left">-->
<!--                                        <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="review-num">-->
<!--                                        <span class="count" itemprop="ratingCount">2</span> reviews-->
<!--                                    </div>-->
<!--                                </div>-->

                                <p class="price">
                                    <?php if (!empty($row['percentage'])) { ?>
                                        <del><span class="amount"><?php echo $row['productprice']?> EGP</span></del>
                                        <ins><span class="amount text-dark font-weight-semibold"><?php echo $row['percentage']?>EGP</span></ins>
                                    <?php  }else{?>
                                        <ins><span class="amount text-dark font-weight-semibold"><?php echo $row["productprice"]?> EGP</span></ins>
                                        <?php
                                    } ?>
                                </p>
<!--                                <form enctype="multipart/form-data" method="post" class="cart">-->
<!--                                    <div class="quantity quantity-lg">-->
<!--                                        <input type="button" class="minus" value="-">-->
<!--                                        <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">-->
<!--                                        <input type="button" class="plus" value="+">-->
<!--                                    </div>-->
<!--                                    <button href="#" class="btn btn-primary btn-modern text-uppercase">Add to cart</button>-->
<!--                                </form>-->

<!--                                <div class="product-meta">-->
<!--                                    <span class="posted-in">Categories: <a rel="tag" href="#">Accessories</a>, <a rel="tag" href="#">Bags</a>.</span>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="tabs tabs-product mb-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">Description</a></li>
<!--                                    <li class="nav-item"><a class="nav-link py-3 px-4" href="#productInfo" data-toggle="tab">Additional Information</a></li>-->
<!--                                    <li class="nav-item"><a class="nav-link py-3 px-4" href="#productReviews" data-toggle="tab">Reviews (2)</a></li>-->
                                </ul>
                                <div class="tab-content p-0">
                                    <div class="tab-pane p-4 active" id="productDescription">
                                        <p><?php echo  $row['description']?></p>
                                    </div>
                                    <div class="tab-pane p-4" id="productInfo">
                                        <table class="table m-0">
                                            <tbody>
                                            <tr>
                                                <th class="border-top-0">
                                                    Size:
                                                </th>
                                                <td class="border-top-0">
                                                    Unique
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Colors
                                                </th>
                                                <td>
                                                    Red, Blue
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Material
                                                </th>
                                                <td>
                                                    100% Leather
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane p-4" id="productReviews">
                                        <ul class="comments">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                        <img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
																	<strong>Jack Doe</strong>
																	<span class="float-right">
																		<div class="pb-0 clearfix">
																			<div title="Rated 3 out of 5" class="float-left">
																				<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																			</div>

																			<div class="review-num">
																				<span class="count" itemprop="ratingCount">2</span> reviews
																			</div>
																		</div>
																	</span>
																</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail border-0 p-0 d-none d-md-block">
                                                        <img class="avatar" alt="" src="img/avatars/avatar.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-right">
																		<div class="pb-0 clearfix">
																			<div title="Rated 3 out of 5" class="float-left">
																				<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																			</div>

																			<div class="review-num">
																				<span class="count" itemprop="ratingCount">2</span> reviews
																			</div>
																		</div>
																	</span>
																</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="solid my-5">
                                        <h4>Add a review</h4>
                                        <div class="row">
                                            <div class="col">

                                                <form action="" id="submitReview" method="post">
                                                    <div class="form-row">
                                                        <div class="form-group col pb-2">
                                                            <label class="required font-weight-bold text-dark">Rating</label>
                                                            <input type="text" class="rating-loading" value="0" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'xs'}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-6">
                                                            <label class="required font-weight-bold text-dark">Name</label>
                                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label class="required font-weight-bold text-dark">Email Address</label>
                                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label class="required font-weight-bold text-dark">Review</label>
                                                            <textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col mb-0">
                                                            <input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="solid my-5">
<!--                    <h4 class="mb-3">Related <strong>Products</strong></h4>-->
<!--                    <div class="masonry-loader masonry-loader-showing">-->
<!--                        <div class="row products product-thumb-info-list mt-3" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">-->
<!--                            <div class="col-12 col-sm-6 col-lg-3 product">-->
<!--										<span class="product-thumb-info border-0">-->
<!--											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->
<!--												<span class="text-uppercase text-1">Add to Cart</span>-->
<!--											</a>-->
<!--											<a href="shop-product-sidebar-left.html">-->
<!--												<span class="product-thumb-info-image">-->
<!--													<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">-->
<!--												</span>-->
<!--											</a>-->
<!--											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">-->
<!--												<a href="shop-product-sidebar-left.html">-->
<!--													<h4 class="text-4 text-primary">Photo Camera</h4>-->
<!--													<span class="price">-->
<!--														<del><span class="amount">$325</span></del>-->
<!--														<ins><span class="amount text-dark font-weight-semibold">$299</span></ins>-->
<!--													</span>-->
<!--												</a>-->
<!--											</span>-->
<!--										</span>-->
<!--                            </div>-->
<!--                            <div class="col-12 col-sm-6 col-lg-3 product">-->
<!--										<span class="product-thumb-info border-0">-->
<!--											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->
<!--												<span class="text-uppercase text-1">Add to Cart</span>-->
<!--											</a>-->
<!--											<a href="shop-product-sidebar-left.html">-->
<!--												<span class="product-thumb-info-image">-->
<!--													<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">-->
<!--												</span>-->
<!--											</a>-->
<!--											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">-->
<!--												<a href="shop-product-sidebar-left.html">-->
<!--													<h4 class="text-4 text-primary">Golf Bag</h4>-->
<!--													<span class="price">-->
<!--														<span class="amount text-dark font-weight-semibold">$72</span>-->
<!--													</span>-->
<!--												</a>-->
<!--											</span>-->
<!--										</span>-->
<!--                            </div>-->
<!--                            <div class="col-12 col-sm-6 col-lg-3 product">-->
<!--										<span class="product-thumb-info border-0">-->
<!--											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->
<!--												<span class="text-uppercase text-1">Add to Cart</span>-->
<!--											</a>-->
<!--											<a href="shop-product-sidebar-left.html">-->
<!--												<span class="product-thumb-info-image">-->
<!--													<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">-->
<!--												</span>-->
<!--											</a>-->
<!--											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">-->
<!--												<a href="shop-product-sidebar-left.html">-->
<!--													<h4 class="text-4 text-primary">Workout</h4>-->
<!--													<span class="price">-->
<!--														<span class="amount text-dark font-weight-semibold">$60</span>-->
<!--													</span>-->
<!--												</a>-->
<!--											</span>-->
<!--										</span>-->
<!--                            </div>-->
<!--                            <div class="col-12 col-sm-6 col-lg-3 product">-->
<!--										<span class="product-thumb-info border-0">-->
<!--											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->
<!--												<span class="text-uppercase text-1">Add to Cart</span>-->
<!--											</a>-->
<!--											<a href="shop-product-sidebar-left.html">-->
<!--												<span class="product-thumb-info-image">-->
<!--													<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">-->
<!--												</span>-->
<!--											</a>-->
<!--											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">-->
<!--												<a href="shop-product-sidebar-left.html">-->
<!--													<h4 class="text-4 text-primary">Luxury bag</h4>-->
<!--													<span class="price">-->
<!--														<span class="amount text-dark font-weight-semibold">$199</span>-->
<!--													</span>-->
<!--												</a>-->
<!--											</span>-->
<!--										</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>

    </div>
<?php include "include/footer.php" ?>
    </div>
<?php include "include/scripts.php" ?>