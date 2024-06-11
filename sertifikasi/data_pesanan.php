<?php

    $daftarEsTeh = array("Es Teh Manis", "Es Teh Tawar", "Es Thaitea", "Es Teh Jumbo");

// mengambil data file json
$fileDataPesanan = "data/data_pesanan.json";
$isiDataPesanan = file_get_contents($fileDataPesanan);

$daftarPesanan = array();
// mengubah data karyawan menjadi ke array associative
$daftarPesanan = json_decode($isiDataPesanan, true);


    if(isset($_POST['btnPesan'])) { // jika btnPesan di klik

        // get data dari post
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];
        $nomorTelpon = $_POST['nomorTelpon'];
        $jumlah = $_POST['jumlah'];
        $teh = $_POST['teh'];

        // data yang diinput ke dalam array
        $dataPesanan = array(
            "nama" => $nama,
            "alamat" => $alamat,
            "umur" => $umur,
            "nomorTelpon" => $nomorTelpon,
            "jumlah" => $jumlah,
            "teh" => $teh
        );

        // function hitungharga
        function hitungHarga($teh, $jumlah) {
            switch ($teh) {
                case "Es Teh Manis":
                    return 1000 * $jumlah;
                case "Es Teh Tawar":
                    return 2000 * $jumlah;
                case "Es Thaitea":
                    return 3000 * $jumlah;
                case "Es Teh Jumbo":
                    return 4000 * $jumlah;
                default:
                    return 0;
            }
        }

     // memasukkan array data karyawan yang baru, ke daftar karyawan sebelumnya
     array_push($daftarPesanan, $dataPesanan);

     // mengubah array data karyawan ke json format
     $dataYangInginDitulisKeFile = json_encode($daftarPesanan, JSON_PRETTY_PRINT);

     // tulis ke file data ke json
     file_put_contents($fileDataPesanan, $dataYangInginDitulisKeFile);

     
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Es Teh</title>

    <!-- Memanggil CSS Bootstrap-->
    <link rel="icon" href="img/logo umko.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .container {
            max-width: 900px; /* kurangi lebar maksimal container */
            margin: 0 auto;
            padding: 15px; /* kurangi padding container */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        h1 {
            font-family: 'Playfair Display', serif;
            text-align: center;
        }

        h4 {
            font-family: 'Playfair Display', serif;
            text-align: center;
            background-color: #70c0d7;
            font-size:20px;
        }

        body {
            font-family: 'roboto', sans-serif; /* mengubah jenis font */
        }

        img {
            width: 60px;
            height: 60px;
        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <navbar class="navbar-brand">
        <div class="container" style="background-color:white">
            <h1 class="navbar-brand" style="font-size:30px">
                <img src="img/esteh.jpg" class="d-inline-block align-text-bot">
        Selamat Datang Di Warung Es Teh. Silahkan Pilih Menu Pilihan!!
    </h1>
    </navbar>
    <!-- End Navbar-->
    <hr>
<div class="container">
            <h4>Daftar Mahasiswa</h4>
            <table class="table table-striped"action="data_pesanan">
                <thead class="table-primary">
                    <tr>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Umur</td>
                        <td>No. Telepon</td>
                        <td>Jumlah Pesanan</td></td>
                        <td>Minuman</td>
                        <td>Harga</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($daftarPesanan as $pesanan) {
                        echo "<tr>";
                        echo "<td>". $pesanan['nama']. "</td>";
                        echo "<td>". $pesanan['alamat']. "</td>";
                        echo "<td>". $pesanan['umur']. "</td>";
                        echo "<td>". $pesanan['nomorTelpon']. "</td>";
                        echo "<td>". $pesanan['jumlah']. "</td>";
                        echo "<td>". $pesanan['teh']. "</td>";
                    
                        // Menghitung harga
                        $harga = hitungHarga($pesanan['teh'], $pesanan['jumlah']);
                        echo "<td>". $harga . "</td>";
                    
                        echo "</tr>";
                    }
                    
                    ?>
                </tbody>
                <tfoot></tfoot>
            </table>