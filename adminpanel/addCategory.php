<?php
include("header.php");
include("connection.php");
?>

<!-- FORM  -->
<div class="col-sm-6 col-xl-4" style="margin: 100px;">
    <div class="bg-light rounded h-100 p-4">
        <h2 class="mb-4">Category</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control border border-3" name="category_name" placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary" name="category_btn">Add Category</button>
        </form>
    </div>
</div>


<?php

if (isset($_POST['category_btn'])) {
    $category_name = $_POST['category_name'];

    $insert = "INSERT INTO `category` (category_name)
                VALUES ('$category_name')";

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