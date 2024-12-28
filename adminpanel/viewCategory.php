<?php
include("header.php");
include("connection.php");
$select = "SELECT * FROM `category`";
$row = mysqli_query($connect, $select);
?>


<div class="card" style="margin: 100px;">
    <div class="card-header">
        <div class="card-title">View Category</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border border-3">
                <thead class="border border-2">
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_assoc($row)) {
                    ?>
                        <tr>
                            <th><?php echo $data['category_id']; ?></th>
                            <td><?php echo $data['category_name']; ?></td>
                            <td><a href="viewCategory.php?a=<?php echo $data['category_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                            <td><a href="viewCategory.php?b=<?php echo $data['category_id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
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
if (isset($_GET['a'])) {
    $category_id = $_GET['a'];
    $select_cat = "SELECT * FROM `category` WHERE `category_id` = '$category_id'";
    $category_row = mysqli_query($connect, $select_cat);

    $data = mysqli_fetch_assoc($category_row);
?>
    <div class="col-sm-6 col-xl-4" style="margin: 100px;">
        <div class="bg-light rounded h-100 p-4">
            <h2 class="mb-4">Category</h2>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Update Category Name</label>
                    <input value="<?php echo $data['category_name'] ?>" type="text" class="form-control border border-3" name="category_name" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary" name="update_category">Update</button>
            </form>
        </div>
    </div>

<?php

    if (isset($_POST['update_category'])) {
        $category_name = $_POST['category_name'];
        $update_category = "UPDATE `category` SET `category_name` = '$category_name' WHERE `category_id` = '$category_id'";
        $done = mysqli_query($connect, $update_category);


        if ($done) {
            echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'viewCategory.php';
                        </script>";
        }
    }
}
?>

<!-- DELETE  -->

<?php
if (isset($_GET['b'])) {
    $category_id = $_GET['b'];
    $delete_category = "DELETE FROM `category` WHERE `category_id` = '$category_id'";
    $done = mysqli_query($connect, $delete_category);

    if ($done) {
        echo "<script>
                    alert('Record Deleted!');
                    window.location.href = 'viewCategory.php';
                    </script>";
    }
}

?>

<?php
include("footer.php");
?>