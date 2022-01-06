<?php 
    require 'koneksi.php';
    require 'session.php';

    $kodeBarang = htmlspecialchars($_POST['kd_brg']);
    $namaBarang = htmlspecialchars($_POST['nm_brg']);
    $keterangan = htmlspecialchars($_POST['ket']);
    $stok = $_POST['stok'];

    if ( empty($namaBarang) || $namaBarang == "" ) {
        echo "<script>
                alert('Nama barang tidak boleh kosong!');
                window.location = '../databarang';
              </script>";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO tb_barang (kode_barang, nama_barang, keterangan, stok)
                                    VALUES ('$kodeBarang', '$namaBarang', '$keterangan','$stok')");
        if ( $sql ) {
            echo "<script>
                    alert('Data berhasil ditambahkan');
                    window.location = '../databarang';
                  </script>";
        }
        else {
            echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location = '../databarang';
                  </script>";
        }
    }
?>