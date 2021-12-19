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
       <?php $harga = [20000, 50000, 10000, 50000]; ?>
        <hr>
        <table border="1" cellpadding= 10 cellspacing= 0 >
            <tr>
                <td>Nama Operator</td>
                <td>
                  <?php if($kartu == "sp20") {
                      echo "Simpati";
                      echo "<tr>
                      <td>Harga</td>
                      <td>$harga[0]</td> 
                      </tr>";
                  }elseif($kartu == "sm50"){
                        echo "Smartfren";
                        echo "<tr>
                      <td>Harga</td>
                      <td>$harga[1]</td> 
                      </tr>";
                  }
                  
                  ?>
                </td>
            </tr>
        <?php endif; ?>
</body>

</html>