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
        <h2 class="mb-4">Add Female Products</h2>
        <form method="post" enctype="multipart/form-data">
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
if (isset($_POST['Product_btn'])) {
    $product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($connect, $_POST['product_price']);
    $product_descrip = mysqli_real_escape_string($connect, $_POST['product_description']);
    $category_id = mysqli_real_escape_string($connect, $_POST['c_id']);
    $brand_id = mysqli_real_escape_string($connect, $_POST['b_id']);

    $product_image = $_FILES['product_image'];
    $image_name = $product_image['name'];
    $image_tmpname = $product_image['tmp_name'];
    $image_size = $product_image['size'];
    $image_type = $product_image['type'];

    // Ensure the directory exists
    $directory = 'product_images/F_product/';
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
    $location = $directory . $image_name;

    // Move the uploaded file to the specified location
    if (move_uploaded_file($image_tmpname, $location)) {
        $insert_product = "INSERT INTO `fproduct`(`productName`, `productPrice`, `productDescription`, `productImage`, `category_id`, `brand_id`) 
        VALUES ('$product_name','$product_price','$product_descrip','$image_name','$category_id','$brand_id')";

        $done = mysqli_query($connect, $insert_product);
        if ($done) {
            echo "<script>
            alert('Product Inserted!');
            window.location.href = 'viewFproduct.php';
            </script>";
        } else {
            echo "<script>alert('Failed to insert product');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image');</script>";
    }
}
?>


<?php
include("footer.php");
?>