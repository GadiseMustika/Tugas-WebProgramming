<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP - INPUT</title>
</head>

<body>
    <h4>Aplikasi Sederhana Penjualan Kartu Perdana</h4>

    <form action="output.php" method="post">
        <table border="1" cellpadding= 5 cellspacing= 0>
            <tr>
                <td>Nama Customer</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            <tr>
                <td>Tanggal Beli</td>
                <td>
                    <?= date("Y-m-d"); ?>
                </td>
            </tr>

            <tr>
                <td>Kode Voucher</td>
                <td>
                    <select name="kartu" id="kartu">
                        <option value="sp20">sp20</option>
                        <option value="sm50">sm50</option>
                        <option value="m310">m310</option>
                        <option value="xl50">xl50</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Jumlah Beli</td>
                <td>
                    <input type="text" name="jumlah" id="jumlah">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="hitung">Hitung</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>