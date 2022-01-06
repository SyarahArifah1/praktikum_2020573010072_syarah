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
                        <h1 class="h2">Daftar Transaksi</h1>
                        <!-- User Menu -->
                        <?php require 'components/user_menu.php' ?>
                        <!-- End User Menu -->
                    </div>
                </header>

                <main>
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <!-- <h3 class="card-title">Daftar Transaksi</h3> -->
                                <form class="d-flex ms-auto">
                                    <input class="form-control rounded-3 me-2" type="search" placeholder="Search" aria-label="Search">
                                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead>
                                        <tr class="bg-white">
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No. HP</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Bukti Pembayaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>08/12/21</td>
                                            <td>1,001</td>
                                            <td>Muhammad Rizky Safdila</td>
                                            <td>082361002021</td>
                                            <td>3</td>
                                            <td>Rp38.000</td>
                                            <td class="text-center">
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-regular fa-circle-info me-2"></i>
                                                    Lihat
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09/12/21</td>
                                            <td>1,002</td>
                                            <td>Syarah Arifah</td>
                                            <td>085361232023</td>
                                            <td>2</td>
                                            <td>Rp24.000</td>
                                            <td class="text-center">
                                                <span class="badge bg-danger">Failed</span>
                                            </td>
                                            <td>
                                                Belum Upload
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09/12/21</td>
                                            <td>1,003</td>
                                            <td>Syarah Arifah</td>
                                            <td>085361232023</td>
                                            <td>5</td>
                                            <td>Rp60.000</td>
                                            <td class="text-center">
                                                <span class="badge bg-success">Success</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-regular fa-circle-info me-2"></i>
                                                    Lihat
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>