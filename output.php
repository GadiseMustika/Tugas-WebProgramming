<?php
require "input.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP - OUTPUT</title>
</head>

<body>
    <?php if (isset($_POST["hitung"])) : ?>

       <?php $kartu = $_POST["kartu"]; ?> 
       <?php $jumlah = $_POST["jumlah"]; ?> 
       <?php $harga; ?>
        <hr>
        <table border="1" cellpadding= 10 cellspacing= 0 >
            <tr>
                <td>Nama Operator</td>
                <td>
                  <?php 
                  // untuk mencetak nama operator  dan harga berdasarkan pilihan kode kartu
                  if($kartu == "sp20") {
                      echo "Simpati";
                        $harga = 20000;
                      echo "<tr>
                      <td>Harga</td>
                      <td>$harga</td> 
                      </tr>";
                  }elseif($kartu == "sm50"){
                        echo "Smartfren";
                        $harga = 50000;
                        echo "<tr>
                      <td>Harga</td>
                       <td>$harga</td>
                      </tr>";
                  }elseif($kartu == "m310"){
                        echo "IM3";
                        $harga = 10000;
                        echo "<tr>
                      <td>Harga</td>
                      <td>$harga</td> 
                      </tr>";
                  }elseif($kartu == "xl50"){
                        echo "XL";
                        $harga = 50000;
                        echo "<tr>
                      <td>Harga</td>
                      <td>$harga</td> 
                      </tr>";
                  }
                  
                  ?>
                </td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>
                <?php
                $subtotal = $harga * $jumlah;
                echo $subtotal;
                ?>
                </td>
            </tr>
        <?php endif; ?>

</body>

</html>