<?php
include('header.php');
include('connection.php');
?>

<!-- FORM  -->
<div class="col-sm-6 col-xl-4" style="margin: 100px;">
  <div class="bg-light rounded h-100 p-4">
    <h2 class="mb-4">Add Stylist</h2>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control border border-3" placeholder="Enter Full Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control border border-3" placeholder="Choose Username">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="text" class="form-control border border-3" placeholder="Enter email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control border border-3" placeholder="Create Password">
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="text" class="form-control border border-3" placeholder="Confirm Password">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact</label>
        <input type="text" class="form-control border border-3" placeholder="Phone Number">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control border border-3" placeholder="Date Of Birth">
      </div>

      <div class="mb-3">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Select Role
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Admin</a></li>
            <li><a class="dropdown-item" href="#">Receptionist</a></li>
            <li><a class="dropdown-item" href="#">Stylist</a></li>
          </ul>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Add User</button>
    </form>
  </div>
</div>


<?php
include('footer.php');
?>