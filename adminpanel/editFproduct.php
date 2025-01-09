<?php
include("connection.php");
include("header.php");

if (isset($_GET['k'])) {
    $product_id = $_GET['k'];

    $select = "SELECT fproduct.*, category_name, brand_name
FROM fproduct
INNER JOIN category
ON category.category_id = fproduct.category_id
INNER JOIN brand
ON brand.brand_id = fproduct.brand_id WHERE Id = '$product_id'";
    $query = mysqli_query($connect, $select);
    $fetch_product = mysqli_fetch_assoc($query);
?>

    <!-- Form Start -->
    <form method="post" enctype="multipart/form-data" style="margin: 100px;">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h2 class="mb-4">Update Product</h2>

                        <select name="c_id" class="form-select mb-3" aria-label="Default select example">

                            <?php
                            $sel_cat = "SELECT * FROM category";
                            $query_cat = mysqli_query($connect, $sel_cat);
                            while ($fetch_cat = mysqli_fetch_assoc($query_cat)) { ?>

                                <option value="<?php echo $fetch_cat['category_id'] ?>" <?php if ($fetch_product['category_id'] == $fetch_cat['category_id']) {
                                                                                            echo "selected = 'selected'";
                                                                                        } ?>> <?php echo $fetch_cat['category_name'] ?> </option>

                            <?php  } ?>

                        </select>

                        <select name="b_id" class="form-select mb-3" aria-label="Default select example">

                            <?php
                            $sel_brand = "SELECT * FROM brand";
                            $query_brand = mysqli_query($connect, $sel_brand);
                            while ($fetch_brand = mysqli_fetch_assoc($query_brand)) { ?>

                                <option value="<?php echo $fetch_brand['brand_id'] ?>" <?php if ($fetch_product['brand_id'] == $fetch_brand['brand_id']) {
                                                                                            echo "selected = 'selected'";
                                                                                        } ?>> <?php echo $fetch_brand['brand_name'] ?> </option>


                            <?php  } ?>

                        </select>

                        <div class="mb-3">
                            <label for="pn" class="form-label">Product Name</label>
                            <input type="text" name="p_name" value="<?php echo $fetch_product['productName'] ?>" class="form-control" id="pn"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="pp" class="form-label">Product Price</label>
                            <input type="text" name="p_price" value="<?php echo $fetch_product['productPrice'] ?>" class="form-control" id="pp"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="pm" class="form-label">Product Model</label>
                            <input type="text" name="p_descrip" value="<?php echo $fetch_product['productDescription'] ?>" class="form-control" id="pm"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="pi" class="form-label">Product Image</label>
                            <input type="file" name="p_image" class="form-control" id="pi"
                                aria-describedby="emailHelp">
                        </div>

                        <img src="product_images/F_product/<?php echo $fetch_product['productImage'] ?>" alt="" width="150px">

                        <button type="submit" name="update_product" class="btn btn-primary m-2">Update</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Form End -->
<?php
    // } 

    if (isset($_POST['update_product'])) {
        $c_id = $_POST['c_id'];
        $b_id = $_POST['b_id'];
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_descrip = $_POST['p_descrip'];

        $p_image = $_FILES['p_image'];
        $img_name = $p_image['name'];
        $img_tmpname = $p_image['tmp_name'];
        $img_size = $p_image['size'];
        $img_type = $p_image['type'];

        $path = 'product_images/F_product/' . $img_name;

        if (is_uploaded_file($img_tmpname)) {
            move_uploaded_file($img_tmpname, $path);

            $update = "UPDATE `fproduct` SET `productName`='$p_name',`productPrice`='$p_price',`productDescription`='$p_descrip', `productImage` = '$img_name', `category_id`='$c_id',`brand_id`='$b_id' WHERE `id` = '$product_id'";
            $done = mysqli_query($connect, $update);
            if ($done) {
                echo
                "<script>
            alert('Product Updated With Image!');
            window.location.href = 'viewFproduct.php';
            </script>";
            }
        }
        // else{
        //     $update = "UPDATE `mproduct` SET `product_name`='$p_name',`product_price`='$p_price',`product_model`='$p_model',`product_specification`='$p_spec', `category_id`='$c_id',`brand_id`='$b_id' WHERE `id` = '$product_id'";
        //     $done = mysqli_query($connect, $update);
        //     if($done){
        //         echo
        //         "<script>
        //         alert('Product Updated Without Image!');
        //         window.location.href = 'viewMproduct.php';
        //         </script>";
        //     }
        // }
    }
}



// DELETE CODE 
if (isset($_GET['l'])) {
    $product_id = $_GET['l'];


    $delete = "DELETE FROM fproduct WHERE Id = '$product_id'";
    $done = mysqli_query($connect, $delete);
    if ($done) {
        echo
        "<script>
    alert('Product Deleted!');
    window.location.href = 'viewFproduct.php';
    </script>";
    }
}

?>

<?php
include("footer.php");
?>