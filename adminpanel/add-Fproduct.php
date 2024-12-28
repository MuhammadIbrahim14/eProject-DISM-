<?php
include("header.php");
include("connection.php");

$category_select = "SELECT * FROM `category`";
$category_row = mysqli_query($connect, $category_select);

$brand_select = "SELECT * FROM `brand`";
$brand_row = mysqli_query($connect, $brand_select);
?>

<!-- FORM  -->
<div class="col-sm-6 col-xl-4" style="margin: 100px;">
    <div class="bg-light rounded h-100 p-4">
        <h2 class="mb-4">User Form</h2>
        <form>
            <h6 class="mb-4">Select</h6>
            <select name="c_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Select Category</option>
                <?php
                while ($option = mysqli_fetch_assoc($category_row)) { ?>
                    <option value=" <?php echo $option['category_id'] ?> "> <?php echo $option['category_name'] ?> </option>
                <?php   }
                ?>
            </select>

            <select name="b_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Select Brand</option>
                <?php
                while ($option = mysqli_fetch_assoc($brand_row)) { ?>
                    <option value=" <?php echo $option['brand_id'] ?> "> <?php echo $option['brand_name'] ?> </option>
                <?php   }
                ?>
            </select>

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control border border-3" name="product_name" placeholder="Enter Product Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control border border-3" name="product_price" placeholder="Enter Product Price">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <input type="text" class="form-control border border-3" name="product_description" placeholder="Enter Product Description">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control border border-3" name="product_image">
            </div>
            <button type="submit" class="btn btn-primary" name="Product_btn">Add Product</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['product_btn'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_model = $_POST['product_description'];
    $category_id = $_POST['c_id'];
    $brand_id = $_POST['b_id'];

    $product_image = $_FILES['product_image'];
    $image_name = $product_image['name'];
    $image_tmpname = $product_image['tmp_name'];
    $image_size = $product_image['size'];
    $image_type = $product_image['type'];

    // $directory = 'product_images/';
    $location = 'product_images/F_product/' . $image_name;

    move_uploaded_file($image_tmpname, $location);

    $insert_product = "INSERT INTO `F_product`(`product_name`, `product_price`, `product_description`, `product_image`, `category_id`, `brand_id`) 
    VALUES ('$product_name','$product_price','$product_model','$product_spec','$image_name','$category_id','$brand_id')";

    $done = mysqli_query($connect, $insert_product);
    if ($done) {
        echo "<script>
        alert('Product Inserted!');
        window.location.href = 'viewProduct.php';
        </script>";
    }
}

?>


<?php
include("footer.php");
?>