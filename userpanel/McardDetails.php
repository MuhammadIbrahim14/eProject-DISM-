<?php
include('header.php');
include("../adminpanel/connection.php");


    $mp_id = $_GET['m'];
    $sel = "SELECT * FROM `mproduct` WHERE id = '$mp_id'";
    $query = mysqli_query($connect,$sel);
    $fetch = mysqli_fetch_assoc($query);

?>




    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="../adminpanel/product_images/M_product/<?php echo $fetch['productImage']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $fetch['productName']?></h3>
                        <div class="product__details__price">$<?php echo $fetch['productPrice']?></div>
                        <p><?php echo $fetch['productDescription']?></p>

                        <!-- Add to Cart Form -->
                <form method="post" action="addToCart.php">
                    <p><i class=" text-primary me-3"></i>Quantity: 
                        <input type="number" name="quantity" min="1" max="10" value="1">
                    </p>
                    <input type="hidden" name="product_id" value="<?php echo $fetch['id']; ?>">
                    <a class="btn rounded-pill py-3 px-5 mt-3" href="">Buy Now</a>
                    <button type="submit" name="add_to_cart" class="btn btn-warning rounded-pill py-3 px-5 mt-3">Add to Cart</button>
                </form>
                        <ul>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->






<?php
include('footer.php');
?>