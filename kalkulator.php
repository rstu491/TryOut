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
      }
      p{
        font-size: 18px;
      }
    </style>
</head>
<body>
    <h1>Kalkulator Barang</h1>
<form method="POST" action="">
    <input type="number" name="angka_satu"  placeholder="angka Pertama"><br>
    <input type="number" name="angka_dua"  placeholder="angka Kedua"><br>
    <select class="opt" name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select><br>
    <input type="submit" name="proses" value="Hitung"> <input type="reset" name="reset" value="Hapus">
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
    }elseif ($operasi == 'kali') {
        echo"Hasil = ", $angka_pertama * $angka_kedua;
    }elseif ($operasi == 'bagi') {
        echo"Hasil = ", $angka_pertama / $angka_kedua;
    }
}
?>
    </div>
</body>
</html>