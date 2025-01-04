<?php
include('header.php');
include('connection.php');
?>



<div class="col-sm-6 col-xl-3" style="margin: 100px;">
  <div class="bg-light rounded h-100 p-4">
    <h2 class="mb-4">Roles</h2>
    <form method="post">
      <div class="mb-3">
        <!-- <label class="form-label">Roles</label> -->
        <input type="text" class="form-control border border-2" name="role_name" placeholder="Enter Role">
      </div>
      <button type="submit" class="btn btn-primary" name="role_btn">Add Role</button>
    </form>
  </div>
</div>

<?php

            if(isset($_POST['role_btn'])){
                $role_name = $_POST['role_name'];

                $inserted = "INSERT INTO `roles` (role_name)
                VALUES ('$role_name')";

               $done =  mysqli_query($connect, $inserted);

               if($done){
                echo "<script>
                alert('Role Added!');
                window.location.href = 'viewRoles.php';
                </script>";
               }
            }
            ?>




<?php
include('footer.php');
?>