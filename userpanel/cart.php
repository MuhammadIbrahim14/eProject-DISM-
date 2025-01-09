<?php
session_start();
include('header.php');
include("../adminpanel/connection.php");
?>

<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

    // Initialize total price
    $total_price = 0;
?>


    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4 ">
                    <h2 class="mb-4">Your Cart</h2>
                    <table class="table table-responsive table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($_SESSION['cart'] as $product_id => $quantity) {
                                // Fetch product details from the database
                                $sel = "SELECT * FROM `mproduct` WHERE id = '$product_id'";
                                $query = mysqli_query($connect, $sel);
                                $product = mysqli_fetch_assoc($query);

                                // Check if the product exists
                                if ($product) {
                                    // Calculate total for this product
                                    $product_total = $product['productPrice'] * $quantity;
                                    $total_price += $product_total;

                                    // Debug the image path
                                    $image_path = '../adminpanel/product_images/M_product/' . $product['productImage'];
                                    // Check if the image file exists
                                    if (!file_exists($image_path)) {
                                        $image_path = 'path/to/default/image.jpg'; // Provide a default image path if the file doesn't exist
                                    }
                            ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($product['productName']); ?></td>
                                        <td><img src="<?php echo htmlspecialchars($image_path); ?>" alt="Product Image" width="100px" class="d-block mx-auto"></td>
                                        <td><?php echo htmlspecialchars($product['productPrice']); ?></td>
                                        <td><?php echo htmlspecialchars($quantity); ?></td>
                                        <td><?php echo htmlspecialchars($product_total); ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                            <tr style='background-color: #f9f9f9; font-weight: bold;'>
                                <td colspan='4' style='text-align: right;'>Total Price:</td>
                                <td><?php echo $total_price ?></td>
                            </tr>

                        </tbody>
                    </table>

                    <br>
                    <a href='checkout.php' class='btn btn-success'>Proceed to Checkout</a>
                <?php
            } else {
                echo "<h1>Your cart is empty.</h1>";
            }
                ?>
                </div>
            </div>

        </div>
    </div>
    <!-- Table End -->





    <?php
    include('footer.php');
    ?>