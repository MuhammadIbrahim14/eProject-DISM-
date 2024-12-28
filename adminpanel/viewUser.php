<?php
include('header.php');
?>




<div class="card" style="margin: 100px;">
    <div class="card-header">
        <div class="card-title">User Table</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border border-3">
                <thead class="border border-2">
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email Address</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
                        <th>Contact</th>
                        <th>Date Of Birth</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
                        <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php
include('footer.php');
?>