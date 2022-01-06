<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" /> -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Rubik Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Dashboard Style -->
  <link rel="stylesheet" href="css/dashboard.css">

  <!-- Chart Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

  <title>Dashboard - I-MON</title>
</head>

<body>
  <div class="navbar navbar-light sticky-top bg-light d-md-none flex-md-nowrap pb-5 shadow">
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa-solid fa-bars display-6"></span>
    </button>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <!-- Sidebar -->
        <?php require 'components/sidebar.php' ?>
        <!-- End Sidebar -->
      </div>

      <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <header>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3">
            <h1 class="h2">Dashboard</h1>
            <form class="d-flex ms-md-auto me-1">
              <input class="form-control rounded-3 me-2" type="search" placeholder="Search" aria-label="Search">
              <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
            <!-- User Menu -->
            <?php require 'components/user_menu.php' ?>
            <!-- End User Menu -->
          </div>
        </header>

        <main>
          <div class="row">
            <div class="col-sm-6 col-md-3 mt-3">
              <div class="card orders-info p-1 shadow-sm rounded-3 border-0">
                <div class="card-body">
                  <i class="fa-duotone fa-cart-shopping fa-2x p-2 rounded-3 bg-white"></i>
                  <h4 class="card-title mt-3">17</h5>
                    <p class="card-text lh-1">Active Orders</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-3">
              <div class="card earnings-info p-1 shadow-sm rounded-3 border-0">
                <div class="card-body">
                  <i class="fa-duotone fa-coins fa-2x p-2 rounded-3 bg-white"></i>
                  <h4 class="card-title mt-3">IDR 2.000.000</h5>
                    <p class="card-text lh-1">Today Earnings</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-3">
              <div class="card sales-info p-1 shadow-sm rounded-3 border-0">
                <div class="card-body">
                  <i class="fa-duotone fa-tank-water fa-2x p-2 rounded-3 bg-white"></i>
                  <h4 class="card-title mt-3">200 Gallons</h5>
                    <p class="card-text lh-1">Today Sales</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mt-3">
              <div class="card revenue-info p-1 shadow-sm rounded-3 border-0">
                <div class="card-body">
                  <i class="fa-duotone fa-hand-holding-dollar fa-2x p-2 rounded-3 bg-white"></i>
                  <h4 class="card-title mt-3">IDR 1.500.000</h5>
                    <p class="card-text lh-1">Today Revenue</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-sm-6 col-md-12 col-lg-8 mt-3">
              <div class="card rounded-3">
                <div class="card-header d-flex justify-content-between">
                  <h5>myChart 1</h5>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><button class="dropdown-item" type="button">Action</button></li>
                      <li><button class="dropdown-item" type="button">Another action</button></li>
                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-3">
              <div class="card rounded-3">
                <div class="card-header d-flex justify-content-between">
                  <h5>myChart 2</h5>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                      Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><button class="dropdown-item" type="button">Action</button></li>
                      <li><button class="dropdown-item" type="button">Another action</button></li>
                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <canvas class="my-4 w-100" id="myChart2" width="900" height="380"></canvas>
                </div>
              </div>
            </div>
          </div>

          <h2>Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>text</td>
                  <td>random</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>placeholder</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>irrelevant</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>text</td>
                  <td>placeholder</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>visual</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>random</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="js/dashboard.js"></script>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>