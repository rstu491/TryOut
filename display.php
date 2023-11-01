<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Display</title>
    <style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        padding : 10px;
        text-align: justify;
      }
      h1{
        font-size: 32px;
      }
      p{
        font-size: 18px;
      }
    </style>
  </head>
  <body>
  <section id="display">
     <h1 align="center"> Display Barang</h1>
     <hr>
    
     <p>
     <?php
     class Barang1{
      var $name;
      var $quantity;
      var $price;
     }
     $disbarang = new Barang1();
     $disbarang->name='Barang A';
     $disbarang->quantity='10';
     $disbarang->price='5000';
     echo "Nama Barang : $disbarang->name  <br>";
     echo "Jumlah Barang : $disbarang->quantity <br>";
     echo "Harga Barang : $disbarang->price <br><br>";
     
     class Barang2{
      var $nama;
      var $jumlah;
      var $harga;
     }
     $disbarangg = new Barang2();
     $disbarangg->nama='Barang B';
     $disbarangg->jumlah='50';
     $disbarangg->harga='10000';

     echo "Nama Barang : $disbarangg->nama  <br>";
     echo "Jumlah Barang : $disbarangg->jumlah <br>";
     echo "Harga Barang : $disbarangg->harga \n";
     
     ?>
     </p>
     
    </section>
  </body>
</html>
