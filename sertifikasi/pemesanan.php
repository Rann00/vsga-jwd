<?php

    $daftarEsTeh = array("Es Teh Manis", "Es Teh Tawar", "Es Thaitea", "Es Teh Jumbo");
    ?>

<!DOCTYPE html>
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
            max-width: 1000px; /* kurangi lebar maksimal container */
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
    <!-- Content -->
    <div class="container">
        <h4>Data Pesanan</h4>
        <form action="data_pesanan.php" method="post" class="row g-3">
            <div class="col-md-5">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Anda" required>
            </div>
            <div class="col-md-5">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" name="umur" id="umjur" class="form-control" placeholder="Masukkan Umur Anda" required>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <label for="nomorTelpon" class="form-label">Nomor Telpon</label>
                <input type="integer" name="nomorTelpon" id="nomorTelpon" class="form-control" placeholder="Masukkan No. Telpon Anda" required>
            </div>
            <div class="col-md-5">
                <label for="jumlah" class="form-label">Jumlah Pesanan</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah Pesanan Anda" required>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <label for="teh" class="form-label">Pilih Minuman Anda</label>
                <select name="teh" id="teh" class="form-select" placeholder="Pilih Tehmu">
                    <?php
                    // menampilkan isi array kedalam combobox
                    foreach($daftarEsTeh as $det) {
                        echo "<option value='$det'> $det </option>";
                    }
                    ?>
                </select>
                <br>
                <button type="submit" name="btnPesan" id="btnPesan" class="col-md-7 btn btn-success"> Pesan</button>
                </div>
            </form>
            <br>
        </div>
        <!-- End Content--> 
   <script src="js/bootstrap.js"></script>
</body>
</html>