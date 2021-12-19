<?php require "input.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP - OUTPUT</title>
</head>

<body>
    <hr>
    <?php if (isset($_POST["hitung"])) : ?>
        <h4>DETAIL PEMESANAN</h4>

        <?php // mengambil data dari input.php
        ?>
        <?php $kartu = $_POST["kartu"]; ?>
        <?php $jumlah = $_POST["jumlah"]; ?>
        <?php $harga; ?>
        <table border="1" cellpadding=10 cellspacing=0>
            <tr>
                <td>
                    <strong>Operator</strong>
                </td>
                <td>
                    <?php
                    // untuk mencetak nama operator  dan harga berdasarkan pilihan kode kartu
                    if ($kartu == "sp20") {
                        echo "Simpati";
                        $harga = 20000;
                        echo "<tr>
                      <td>Harga</td>
                      <td>$harga</td> 
                      </tr>";
                    } elseif ($kartu == "sm50") {
                        echo "Smartfren";
                        $harga = 50000;
                        echo "<tr>
                      <td>Harga</td>
                       <td>$harga</td>
                      </tr>";
                    } elseif ($kartu == "m310") {
                        echo "IM3";
                        $harga = 10000;
                        echo "<tr>
                      <td>Harga</td>
                      <td>$harga</td> 
                      </tr>";
                    } elseif ($kartu == "xl50") {
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
                <td>
                    <strong>Subtotal</strong>
                </td>
                <td>
                    <?php
                    // menghitung subtotal dari harga dikali dengan  jumlah
                    $subtotal = $harga * $jumlah;
                    echo $subtotal;
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Diskon</strong>
                </td>
                <td>
                    <?php
                    // mendapat diskon 30% jika pembelian lebih dari 3 
                    if ($jumlah >= 3) {
                        // subtotal * 30%
                        $diskon = $subtotal * 30 / 100;
                        echo $diskon;
                    } else {
                        echo 0;
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Total</strong>
                </td>

                <td>
                    <?php
                    // menghitung total dari pemesanan
                    // subtotal dikurang dengan diskon
                    $total = $subtotal - $diskon;
                    echo $total;
                    ?>
                </td>
            </tr>

        <?php endif; ?>

</body>

</html>