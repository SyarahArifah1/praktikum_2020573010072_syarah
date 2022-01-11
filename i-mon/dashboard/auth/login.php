<?php
    session_start();

    if (isset($_SESSION['email'])) {
        header("Location: ../dashboard/home");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" /> -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rubik Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Login Style -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <title>Dashboard - I-MON</title>
</head>

<body>

    <div class="container">
        <div class="row row-cols-md-2 align-items-center gx-5 p-5 p-md-0">
            <div class="col-sm-6 col-lg-5">
                <h1 class="h2">Welcome back</h1>
                <p>Please enter your details.</p>
                <form action="../proses/proses_auth/proses_login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control py-2" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control py-2" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Ingat saya
                            </label>
                        </div>
                        <a href="" class="forgot-pass link-dark text-decoration-none">
                            Lupa password
                        </a>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-signin border-0 py-2" type="submit">
                            <i class="fa-regular fa-arrow-right-to-bracket me-2"></i>
                            Sign in
                        </button>
                    </div>
                    <p class="mt-3 text-center">
                        Belum memiliki akun? <a class="signup-link link-dark text-decoration-none" href="">Daftar</a>
                    </p>
                </form>
            </div>
            <div class="col-lg-7 d-none d-md-grid">
                <div class="bg-login">

                </div>
            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>