<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas BMI 2</title>

    <link rel="stylesheet" href="../materi/css/bootstrap.css">

</head>
<body>

    <!-- AWAL BAGIAN NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hasil Hitung BMI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- END BAGIAN NAVBAR -->
<?php
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];

    $example1 = "Nilai BMI Anda Adalah : ";
    $example2 = "Status BMI : ";
    $bmi = $berat / ($tinggi * $tinggi);
        
    echo $nama . "<br>";
    echo $example1 . $bmi . "<br>";
    getGrade($bmi, $example2);
        
        function getGrade($x, $y) {
            if ($x > 30.0){
                echo $y. "Maaf, Anda Obesitas <br>";
            }else if($x > 25.0 ) {
                echo $y. "Kurangi, Anda Kegemukan <br>";
            }else if($x > 18.5 ) {
                echo $y. "Normal";
            }else {
                echo $y. "Anda Kurus, Perbanyak Makan";
            }
        }
    
