<?php
include("header.php");

    $c_select = "SELECT COUNT(*) AS c FROM users WHERE role_id = 4";
    $c_query = mysqli_query($connect, $c_select);
    $c_count = mysqli_fetch_assoc($c_query);
?>

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <h3 class="fw-bold mb-3">Admin Dashboard</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-primary bubble-shadow-small">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Visitors</p>
                  <h4 class="card-title">1,294</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-success bubble-shadow-small">
                  <i class="fas fa-luggage-cart"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Sales</p>
                  <h4 class="card-title">$ 1,345</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-secondary bubble-shadow-small">
                  <i class="far fa-check-circle"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Order</p>
                  <h4 class="card-title">576</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Employees Data</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                <i class="far fa-user"></i>
                Receptionists
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab-icon" data-bs-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                <i class="far fa-user"></i>
                Stylists
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                <i class="far fa-user"></i>
                Clients
              </a>
            </li>
          </ul>
          <hr>
          <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                  <p>Total Receptionist</p>
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                      <button class="btn btn-success" style="margin: 15px;"><a href="profiles.php" style="text-decoration: none; color: white;">View</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                  <p>Total Stylists</p>
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                      <button class="btn btn-success" style="margin: 15px;"><a href="profiles.php" style="text-decoration: none; color: white;">View</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                  <p>Total Clients</p>
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <h4 class="card-title"><?php echo $c_count['c'] ?></h4>
                        </div>
                      </div>
                      <button class="btn btn-success" style="margin: 15px;"><a href="profiles.php" style="text-decoration: none; color: white;">View</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include("footer.php");
    ?>