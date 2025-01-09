<?php
include('connection.php');
include('header.php');
?>


<!-- MALE  -->

<?php
// $select = "SELECT * FROM `mproduct`";
$select = "SELECT `id`, `productName`, `productPrice`, `productDescription`,  `productImage`, `category_name`, `brand_name`
FROM `mproduct`
INNER JOIN `category`
ON `category`.`category_id` = `mproduct`.`category_id`
INNER JOIN `brand`
ON `brand`.`brand_id` = `mproduct`.`brand_id`";

$query = mysqli_query($connect, $select);
?>


<!-- MALE PRODUCT  -->

<div class="card" style="margin: 100px;">
    <div class="card-header">
        <div class="card-title">View Male Product</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border border-3">
                <thead class="border border-2">
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Description</th>
                        <th>Product Image</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($mpro_data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $mpro_data['id']; ?></td>
                            <td><?php echo $mpro_data['productName']; ?></td>
                            <td><?php echo $mpro_data['productPrice']; ?></td>
                            <td><?php echo $mpro_data['productDescription']; ?></td>
                            <td> <img src="product_images/M_product/<?php echo $mpro_data['productImage'] ?> " alt="" width="150px"></td>
                            <td><?php echo $mpro_data['category_name']; ?></td>
                            <td><?php echo $mpro_data['brand_name']; ?></td>
                            <td> <a href="editMproduct.php?i=<?php echo $mpro_data['id'] ?>" class="btn btn-warning">Edit</a> </td>
                            <td> <a href="editMproduct.php?j=<?php echo $mpro_data['id'] ?>" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- TABEL END  -->





<?php
include('footer.php');
?>