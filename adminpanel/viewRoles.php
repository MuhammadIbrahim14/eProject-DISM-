<?php
include('header.php');
include("connection.php");
$select = "SELECT * FROM `roles`";
$roles_row = mysqli_query($connect, $select);
?>



<div class="card" style="margin: 100px;">
    <div class="card-header">
        <div class="card-title">View Roles</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border border-3">
                <thead class="border border-2">
                    <tr>
                        <th>Id</th>
                        <th>Role Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($roles_data = mysqli_fetch_assoc($roles_row)) {
                    ?>
                        <tr>
                            <th><?php echo $roles_data['role_id']; ?></th>
                            <td><?php echo $roles_data['role_name']; ?></td>
                            <td><a href="viewRoles.php?e=<?php echo $roles_data['role_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                            <td><a href="viewRoles.php?f=<?php echo $roles_data['role_name'] ?>"><button class="btn btn-danger">Delete</button></a></td>
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
if (isset($_GET['e'])) {
    $role_id = $_GET['e'];
    $select_role = "SELECT * FROM `roles` WHERE `role_id` = '$role_id'";
    $role_row = mysqli_query($connect, $select_role);

    $role_data = mysqli_fetch_assoc($role_row);
?>
    <div class="col-sm-6 col-xl-4" style="margin: 100px;">
        <div class="bg-light rounded h-100 p-4">
            <h2 class="mb-4">Roles</h2>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Update Role Name</label>
                    <input value="<?php echo $role_data['role_name'] ?>" type="text" class="form-control border border-3" name="role_name" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary" name="update_role">Update</button>
            </form>
        </div>
    </div>

<?php

    if (isset($_POST['update_role'])) {
        $role_name = $_POST['role_name'];
        $update_role = "UPDATE `roles` SET `role_name` = '$role_name' WHERE `role_id` = '$role_id'";
        $done = mysqli_query($connect, $update_role);


        if ($done) {
            echo "<script>
                        alert('Record Updated!');
                        window.location.href = 'viewRoles.php';
                        </script>";
        }
    }
}
?>

<!-- DELETE  -->

<?php
if (isset($_GET['f'])) {
    $role_id = $_GET['f'];
    $delete_role = "DELETE FROM `roles` WHERE `role_id` = '$role_id'";
    $done = mysqli_query($connect, $delete_role);

    if ($done) {
        echo "<script>
                    alert('Record Deleted!');
                    window.location.href = 'viewRoles.php';
                    </script>";
    }
}

?>




<?php
include('footer.php');
?>