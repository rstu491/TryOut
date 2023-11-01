<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Barang</title>
    <style>
      h1{
        font-size: 32px;
      }
      hr{
        color: salmon;
      }
      body{
        background-color:#0a0a0a ;
        color: salmon;
        padding: 10px;
      }
      p{
        font-size: 18px;
      }
      .sub:hover{
        background-color: salmon;
      }
    </style>
</head>
<body>
    <h1>Kalkulator Barang</h1>
    <hr>
<form method="POST" action="">
    <input type="number" name="angka_satu"  placeholder="Harga"><br>
    <input type="number" name="angka_dua"  placeholder="Jumlah"><br>
    <select class="opt" name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select><br>
    <input type="submit" name="proses" value="Hitung" class="sub">
</form>
<?php
if (isset($_POST['proses'])) 
{
    $angka_pertama  = $_POST['angka_satu'];
    $angka_kedua    = $_POST['angka_dua'];
    $operasi        = $_POST['operasi'];

    if ($operasi == 'tambah') {
        echo"Hasil = ",  $angka_pertama + $angka_kedua;
    }elseif ($operasi == 'kurang') {
        echo"Hasil = ", $angka_pertama - $angka_kedua;
    }
    elseif ($operasi == 'kali') {
        echo"Hasil = ", $angka_pertama * $angka_kedua;
    }
    elseif ($operasi == 'bagi') {
        echo"Hasil = ", $angka_pertama / $angka_kedua;
    }
}
?>
    </div>
</body>
</html>