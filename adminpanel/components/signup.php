<?php 
include 'adminpanel/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">First Name</label>
        <input type="text" name="client_firstname"> <br>
        <label for="">Last Name</label>
        <input type="text" name="client_lastname"> <br>
        <select name="gender" id="">
            <option disabled selected>Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Female">Rather not say</option>
        </select> <br>
        <label for="">DOB</label>
        <input type="date" name="dob"> <br>
        <label for="">Username</label>
        <input type="text" name="username"> <br>
        <label for="">Email</label>
        <input type="text" name="email"> <br>
        <label for="">Password</label>
        <input type="password" name="password"> <br>
        <label for="">Contact No</label>
        <input type="number" name="contact_no"> <br>
        <button type="submit" name="signupBtn">Sign Up!</button>
    </form>
</body>
</html>

<?php 
if(isset($_POST['signupBtn'])){
    $first_name = $_POST['client_firstname'];
    $last_name = $_POST['client_lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $contactNo = $_POST['contact_no'];
    $dob = $_POST['dob'];
    $role_id = 4;

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $inserted = "INSERT INTO `clients`(`client_firstname`, `client_Lastname` ,`username`,`email`, `gender`, `password`, `contact_no`, `dob`, `role_id`)
    VALUES ('$first_name', '$last_name', '$username', '$email', '$gender', '$hashed_password', '$contactNo', '$dob', '$role_id')";
    $query = mysqli_query($connect, $inserted);

    if($query){
        echo "<script>
        alert('account created');
        window.location.href = 'login.php';
        </script>";
    } else {
        die("Database query failed: " . mysqli_error($connect));
    }
}
?>