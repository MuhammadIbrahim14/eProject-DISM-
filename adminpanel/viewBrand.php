<?php
include("header.php");
include("connection.php");
$select = "SELECT * FROM `brand`";
$row = mysqli_query($connect, $select);
?>


<div class="card" style="margin: 100px;">
    <div class="card-header">
        <div class="card-title">View Brand</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border border-3">
                <thead class="border border-2">
                    <tr>
                        <th>Id</th>
                        <th>Brand Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_assoc($row)) {
                    ?>
                        <tr>
                            <th><?php echo $data['brand_id']; ?></th>
                            <td><?php echo $data['brand_name']; ?></td>
                            <td><a href="viewBrand.php?c=<?php echo $data['brand_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                            <td><a href="viewBrand.php?d=<?php echo $data['brand_id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- TABEL END  -->

<!-- UPDATE  -->

<?php
if (isset($_GET['c'])) {
    $brand_id = $_GET['c'];
    $select_brand = "SELECT * FROM `brand` WHERE `brand_id` = '$brand_id'";
    $brand_row = mysqli_query($connect, $select_brand);

    $data = mysqli_fetch_assoc($brand_row);
?>
    <div class="col-sm-6 col-xl-4" style="margin: 100px;">
        <div class="bg-light rounded h-100 p-4">
            <h2 class="mb-4">Brand</h2>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Update Brand Name</label>
                    <input value="<?php echo $data['brand_name'] ?>" type="text" class="form-control border border-3" name="brand_name" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary" name="update_brand">Update</button>
            </form>
        </div>
    </div>

<?php

    if (isset($_POST['update_brand'])) {
        $brand_name= $_POST['brand_name'];
        $update_brand = "UPDATE `brand` SET `brand_name` = '$brand_name' WHERE `brand_id` = '$brand_id'";
        $done = mysqli_query($connect, $update_brand);


        if ($done) {
            echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'viewBrand.php';
                        </script>";
        }
    }
}
?>

<!-- DELETE  -->

<?php
if (isset($_GET['d'])) {
    $brand_id = $_GET['d'];
    $delete_brand = "DELETE FROM `brand` WHERE `brand_id` = '$brand_id'";
    $done = mysqli_query($connect, $delete_brand);

    if ($done) {
        echo "<script>
                    alert('Record Deleted!');
                    window.location.href = 'viewBrand.php';
                    </script>";
    }
}

?>


<?php
include("footer.php");
?>