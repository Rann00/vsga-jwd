<?php
    $name = 'pujibarata';
    
    $lama_parkir = 1;
    $tarif = 1;

    $jumlah = $lama_parkir * $tarif;
    $example = hitungTarif(2, 2);

    function hitungTarif($x, $y) {
        return $x * $y;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Parkir Puji Barata</title>
</head>
<body>
    <form action="#" method="get">
        <table>
            <tr>
            <td><label for="product_name" class="form-label">No. Polisi</label></td>
            <td>:</td>
            <td><input type="text" name="no_polisi"/></td>
            </tr>
        <tr>
            <td><label for="product_name" class="form-label">Lama Parkir</label></td>
            <td>:</td>
            <td><input type="number" name="lama_parkir"/></td>
        </tr>
        <tr>
            <td><label for="product_name" class="form-label">Tarif</label></td>
            <td>:</td>
            <td><input type="number" name="tarif"/></td>
        </tr>
            <td><input type="submit" name="btnHitung" value="Hitung"></td>
            </table>
    <?php 
    if(isset($_GET['btnHitung'])) {
    $lama_parkir =$_GET['lama_parkir'];
    $tarif =$_GET['tarif'];
        
    $hasil = hitungTarif($lama_parkir, $tarif);
    echo $hasil;
    }
    ?>
    </form>
</body>
</html>
