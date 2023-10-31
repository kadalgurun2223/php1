<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Toko Jawir</title>
  </head>
  <body>
    <div class="container">
    <br>
    <h1 class="text-left"> Toko ODGJ(Orang Dengan Genetik Jawa)</h1>
    <p class="text-md-start">Program aplikasi sederhana untuk menghitung penjualan barang orang jawir</p>

  <div class="container">
        <form action="" method="POST" name="penjualan">
        <div class="mb-3">
    <label form="NamaBarang">Nama Barang</label>
    <input type="text" class="form-control" id="nama_brg" name="nama_brg">
  </div>
  <div class="mb-3">
    <label form="Hrg_Barang">Harga Barang</label>
    <input type="text" class="form-control" name="hrg_brg">
  </div>
  <div class="mb-3">
    <label form="JumlahBarang">Jumlah Barang</label>
    <input type="text" class="form-control" name="jml_brg">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
</form>
    </div>

    <?php
    if(isset($_POST['submit'])){
      $brg = $_POST['nama_brg'];
      $harga = $_POST['hrg_brg'];
      $jumlah = $_POST['jml_brg'];

      echo "<div class='container'>";
      echo "<hr><h3 class='text-md-start'>jumlah yang harus dibayarkan</h3>";

      $barang = $jumlah * $harga;
      $diskon = $barang * 0.05;
      $total = $barang - $diskon;

      echo "Nama Barang: $brg <br>";
      echo "Harga Barang: $harga <br>";
      echo "Jumlah Barang: $jumlah <br>";
      echo "Diskon : 5% <br>";
      echo "<h3 class='text-md-start'>Rp. $total</h3>";
      echo "</div>";

      
    }
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>