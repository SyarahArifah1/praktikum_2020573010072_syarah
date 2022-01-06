<?php
    require "proses/session.php";
    require "proses/koneksi.php";

    $hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$_SESSION[email]'");
    $row = mysqli_fetch_assoc($hasil);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
    </head>
    <body>
    
        <!-- Navbar -->
        <?php require 'component/header.php' ?>
        <!-- End Navbar -->

        <!-- Sidebar -->
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-3">
                    <?php require 'component/sidebar.php' ?>
                </div>
                <div class="col col-lg-4">
                    <h1 class="mb-2">Profile</h1>
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            Profile Settings
                        </div>
                        <div class="card-body">
                            <form disabled >
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $row['email']; ?>" disabled>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="level" class="form-label" >Level</label>
                                    <input type="text" class="form-control" id="level" value="<?= $row['level']; ?>" disabled>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <?php require 'component/footer.php' ?>
            <!-- End Footer -->
        </div>
        <!-- End Sidebar -->



        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

