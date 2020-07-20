<?php
    include "../admin/connect.php";
    $liveSearch = $_POST['livesearch'];
    if (!empty($liveSearch)) {
        $stmt = $con->prepare('SELECT * FROM products WHERE productname LIKE :keyword');
        $stmt->bindValue(':keyword', '%' . $liveSearch . '%');
        $stmt->execute();
        $rows = $stmt->fetchAll();
        ?>
    <?php foreach ($rows as $row) { ?>
        <div class="col-sm-6 col-lg-4 product">
            <?php if (!empty($row['percentage'])) { ?>
                <a href="product.php?do=<?php echo $row['productid'] ?>"><span class="onsale">Sale!</span></a>
            <?php } else { ?>
                <a><span class=""></span></a>
            <?php } ?>
            <span class="product-thumb-info border-0">
                <!--<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">-->
                <!--<span class="text-uppercase text-1">Add to Cart</span>-->
                <!--</a>-->
                <a href="product.php?do=<?php echo $row['productid'] ?>">
                    <span class="product-thumb-info-image">
                        <img alt="" class="img-fluid" src="admin/assets/images/products/<?php echo $row['path'] ?>">
                    </span>
                </a>
                <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                    <a href="product.php?do=<?php echo $row['productid'] ?>">
                        <h4 class="text-4 text-primary"><?php echo $row['productname'] ?></h4>
                        <span class="price">
                            <?php if (!empty($row['percentage'])) { ?>
                                <del><span class="amount"><?php echo $row['productprice'] ?> EGP</span></del>
                                <ins><span class="amount text-dark font-weight-semibold"><?php echo $row['percentage'] ?> EGP</span></ins>
                            <?php } else {
                                ?>
                                <ins><span class="amount text-dark font-weight-semibold"><?php echo $row["productprice"] ?> EGP</span></ins>
                                <?php
                            } ?>
                        </span>
                    </a>
                </span>
            </span>
        </div>
    <?php } ?>
    <?php
}
?>