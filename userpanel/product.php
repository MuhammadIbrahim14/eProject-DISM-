<?php
include('header.php');
include('../adminpanel/connection.php');

$sel_m = "SELECT * FROM `mproduct`";
$query_m = mysqli_query($connect,$sel_m);

$sel_f = "SELECT * FROM `fproduct`";
$query_f = mysqli_query($connect,$sel_f);
?>





    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            <li data-filter=".men">Men's</li>
                            <li data-filter=".women">Women's</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php while($fetch = mysqli_fetch_assoc($query_m)){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges men">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                            <img width="250px" height="300px" src="../adminpanel/product_images/M_product/<?php echo $fetch['productImage'] ?> " alt="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="McardDetails.php?m=<?php echo $fetch['id'] ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href=""><?php echo $fetch['productName'] ?></a></h6>
                            <h5>$<?php echo $fetch['productPrice'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php while($fetch = mysqli_fetch_assoc($query_f)){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables women">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg">
                            <img width="250px" height="300px" src="../adminpanel/product_images/F_product/<?php echo $fetch['productImage'] ?> " alt="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="FcardDetails.php?n=<?php echo $fetch['Id'] ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $fetch['productName'] ?></a></h6>
                            <h5>$<?php echo $fetch['productPrice'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->




<?php
include('footer.php');
?>