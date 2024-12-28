<?php
include("header.php");
include("connection.php");

$select = "SELECT * FROM `brand`";
$row = mysqli_query($connect, $select);
?>

<!-- FORM  -->
<div class="col-sm-6 col-xl-4" style="margin: 100px;">
    <div class="bg-light rounded h-100 p-4">
        <h2 class="mb-4">Brand</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Brand Name</label>
                <input type="text" class="form-control border border-3" name="brand_name" placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary" name="brand_btn">Add Brand</button>
        </form>
    </div>
</div>

<?php

if (isset($_POST['brand_btn'])) {
    $brand_name = $_POST['brand_name'];

    $insert = "INSERT INTO `brand` (brand_name)
                VALUES ('$brand_name')";

    $done =  mysqli_query($connect, $insert);

    if ($done) {
        echo "<script>
                alert('Record Inserted!');
                window.location.href = 'addCategory.php';
                </script>";
    }
}
?>



<?php
include("footer.php");
?>