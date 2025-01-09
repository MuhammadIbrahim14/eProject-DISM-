<?php
include('header.php');
include('connection.php');
?>

<!-- FORM  -->
<div class="col-sm-6 col-xl-4" style="margin: 100px;">
  <div class="bg-light rounded h-100 p-4">
    <h2 class="mb-4">Add Receptionist</h2>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control border border-3" name="first_name" placeholder="Enter First Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control border border-3" name="last_name" placeholder="Enter Last Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control border border-3" name="username" placeholder="Choose Username">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="text" class="form-control border border-3" name="email" placeholder="Enter email">
      </div>

      <label for="">Gender</label>
      <div class="mb-5 border border-3">
        <select name="gender" id="">
          <option disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control border border-3" name="password" placeholder="Create Password">
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control border border-3" name="confirm_pass" placeholder="Confirm Password">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact</label>
        <input type="number" class="form-control border border-3" name="contact_no" placeholder="Phone Number">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control border border-3" name="dob" placeholder="Date Of Birth">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Select Role</label>
      <select class="form-control" name="role">
        <option value="" disabled selected>Select Role</option>
        <option value="receptionist">Receptionist</option>
        <option value="stylist">Stylist</option>
      </select>
      </div>

      <button type="submit" class="btn btn-primary" name="signup_btn">Add Receptionist</button>
    </form>
  </div>
</div>

<?php

if (isset($_POST['signup_btn'])) {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    $contact_no = $_POST['contact_no'];
    $dob = $_POST['dob'];
    $role = $_POST['role'];

    // Validation: Check if password matches confirm_pass
    if ($pass !== $confirm_pass) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit;
    }

    // Hash the password for security
    // $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

    $insert_data = "INSERT INTO employees(first_name, last_name, username, email, gender, password, contact_no, dob, roles)
    VALUES('$firstname', '$lastname', '$username', '$email', '$gender', '$pass', '$contact_no', '$dob', '$role')";

    $query = mysqli_query($connect, $insert_data);

    if ($query) {
        echo "<script>
        alert('Account Created');
        window.location.href = 'viewUser.php';
        </script>";
    } else {
        die("Database query failed: " . mysqli_error($connect));
    }
}

?>


<?php
include('footer.php');
?>