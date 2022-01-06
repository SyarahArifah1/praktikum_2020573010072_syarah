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
                        <h1 class="h2">Profile</h1>
                        <!-- User Menu -->
                        <?php require 'components/user_menu.php' ?>
                        <!-- End User Menu -->
                    </div>
                </header>

                <main>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 mt-3">
                            <div class="card users-info bg-white p-1 shadow-sm border-2">
                                <div class="card-body">
                                    <div class="d-flex profile-pict bg-light rounded-3 justify-content-center">
                                        <i class="fa-duotone fa-user fa-7x align-self-center text-dark"></i>
                                        <!-- <img src="img/avatar.png" alt="" width="100%" height="100%"> -->
                                    </div>
                                    <input class="mt-3 form-control form-control-sm" type="file" name="photo" id="photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg mt-3">
                            <div class="card">
                                <h5 class="card-header">Profile Settings</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
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