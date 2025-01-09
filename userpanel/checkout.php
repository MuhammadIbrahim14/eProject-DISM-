<?php
include('header.php');
include("../adminpanel/connection.php");
?>


<?php
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h1 class='text-center mt-5'>Your cart is empty. <a href='product.php'>Shop Now</a></h1>";
    include("footer.php");
    exit;
}

$total_price = 0;
?>
<br><br><br>
<!-- Checkout Form -->

<div class="container mt-5">
    <h2 class="text-center">Checkout</h2>
    <form action="process_checkout.php" method="POST">
        <!-- User Details -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">Shipping Address</label>
                <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
            </div>
        </div>


        <!-- Cart Summary -->
        <h4 class="mb-3">Order Summary</h4>
        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Product Name</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $product_id => $quantity) {
                    // Fetch product details
                    $sel = "SELECT * FROM `mproduct` WHERE id = '$product_id'";
                    $query = mysqli_query($connect, $sel);
                    $product = mysqli_fetch_assoc($query);

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
                <?php } ?>
                <?php } ?>
                <tr class="bg-light font-weight-bold">
                    <td colspan="4" class="text-end">Total Price:</td>
                    <td>$<?php echo number_format($total_price, 2); ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Checkout Button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn px-5" name="submit_checkout" style="margin-bottom: 20px; background-color:black ; color: white;">Place Order</button>
        </div>
    </form>
</div>





<?php
include('footer.php');
?>

<?php

    $user_select = "SELECT * FROM `users`";
    $user_row = mysqli_query($connect, $user_select);

    if(isset($_POST["submit_checkout"])){
        $ch_name = $_POST["name"];
        $ch_email = $_POST["email"];
        $ch_contact = $_POST["phone"];
        $ch_address = $_POST["address"];
        $total_price = $_POST["total_price"];

        $insert = "INSERT INTO `orderlist` (full_name, email, contact, address, total_price) 
        VALUES ('$ch_name', '$ch_email', '$ch_contact', '$ch_address', '$total_price')";

$done =  mysqli_query($connect, $insert);

if ($done) {
    echo "<script>
            alert('Order Placed!');
            window.location.href = 'product.php';
            </script>";
}
    }

?>