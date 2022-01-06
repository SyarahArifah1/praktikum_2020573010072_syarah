<?php
    require "koneksi.php";
    require "session.php";

    $barang = $_POST['barang'];
    $matakuliah =  $_POST['matakuliah'];
    
    $select = mysqli_query($conn, "SELECT id FROM tb_user WHERE email = '$_SESSION[email]'");
    $hasil = mysqli_fetch_assoc($select);
    $idUser = $hasil['id'];
    
    if ( $hasil ) {
        $select1 = mysqli_query($conn, "SELECT * FROM tb_peminjaman WHERE barang = '$barang'");
        $hasil1 = mysqli_fetch_assoc($select1);
        if ( !$hasil1 ) {
            $input = mysqli_query($conn, "INSERT INTO tb_peminjaman
                                        (barang, user, status, matakuliah)
                                        VALUES ($barang, $idUser, 1, '$matakuliah')
                                ");
            if ( $input ) {
                echo "<script>
                        alert('Barang berhasil dipinjam!');
                        window.location = '../peminjaman';
                </script>";
            }
        } else {
            echo "<script>
                        alert('Mohon maaf barang tersebut sudah dipinjam!');
                        window.location = '../peminjaman';
                </script>";
        }
    }
?>