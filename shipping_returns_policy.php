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
                    <div class="container py-4">

                        <div class="row">
                            <div class="col">
                                <h2 class="font-weight-normal text-7 mb-2">Shipping Returns <strong
                                            class="font-weight-extra-bold">Policy</strong></h2>
                                <hr class="solid my-5">
                                <div class="toggle toggle-primary" data-plugin-toggle="">
                                    <section class="toggle">
                                        <label> Shipped and Home Delivery products</label>
                                        <p class="" style="height: 0px;">
                                            You may have your product delivered to your home via one of our available
                                            home delivery options. We deliver orders on normal business days, which are
                                            Monday through Saturday excluding government holidays. You assume all risk
                                            of loss for shipped products. Order information such as billing or shipping
                                            address that is inaccurate or incomplete may result in delays. Products can
                                            not be shipped to incomplete addresses. In cases of not accepting the
                                            delivery for reasons other than wrong items, the customer agrees to pay the
                                            shipping charges incurred and specified on the invoice.
                                        </p>
                                    </section>
                                    <section class="toggle">
                                        <label>Order Cancellations</label>
                                        <p class="" style="height: 0px;">We are unable to refund any online purchase
                                            from the time your order is placed (when you click the Confirm Order button)
                                            until the product is received by you and returned to us. If you are not
                                            completely satisfied with your purchase after receiving your product, please
                                            review our returns policy.</p>
                                    </section>
                                    <section class="toggle">
                                        <label>Shipping Charges</label>
                                        <p class="" style="height: 0px;">All shipping charges are based on average
                                            package weight and dimension. This may be different from actual weights of
                                            products. Shipping charges can be computed while finalizing your order prior
                                            to completion.

                                        </p>
                                    </section>
                                    <section class="toggle">
                                        <label>Returns Policy</label>
                                        <p class="" style="height: 0px;">
                                            If you are not completely satisfied with a product, RAM Electronics Company will gladly exchange or refund the purchase – at its own discretion – within 5 business days of the return request date, according to the notes below. Boxes and packing material have to be in the original condition and the product has to be unused and box unopened. All claims for shortages/ misshipments /misbillings must be made within 1 day of delivery. Returns are for replacement or merchandise credit only. The value shall not include any shipping charges. A copy of RAM Electonics invoice must be included with all returns. All items must be returned complete and in their original boxes or packages with all original parts/documentation; if items are not returned with their packages or if any other item or documentation is missing, products will not be accepted as a return item. All returns must be shipped freight prepaid, the customer is responsible for all freight and shipping charges.
                                        </p>
                                    </section>


                                </div>
                            </div>
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