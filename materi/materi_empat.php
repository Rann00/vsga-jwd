<?php
// menulis variabel di php, dimulai $
$nama = 'Michael';
$nama = 10;

$pertama =5;
$kedua =10;

$jumlah = $pertama + $kedua;

$dariFunction = penjumlahan(60, 80);

function penjumlahan($a, $b) {
    return $a +$b;
}

function pengurangan()
{
    echo 800800;
}

// mengambil data dari URL GET
if(isset($_GET['btnHitung'])) {
$angka_pertama =$_GET['pertama'];
$angka_kedua =$_GET['kedua'];

$hasil = penjumlahan($angka_pertama, $angka_kedua);
echo $hasil;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        angka pertama : <input type="number" name="pertama"><br>
        angka kedua : <input type="number" name="kedua"><br>
        <input type="submit" name="btnHitung" value="penjumlahan">
    </form>
</body>
</html>