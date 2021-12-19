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
        <table border="1" cellpadding=5 cellspacing=0>
            <tr>
                <td>
                    <label for="name"></label>
                    <strong> Nama Customer</strong>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" required>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Tanggal Beli</strong>
                </td>
                <td>
                    <?= date("Y-m-d"); ?>
                </td>
            </tr>

            <td>
                <label for="kartu">
                    <strong> Kode Voucher</strong>
                </label>
            </td>
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
                <td>
                    <label for="jumlah">
                        <strong> Jumlah Beli</strong>
                    </label>
                </td>
                <td>
                    <input type="text" name="jumlah" id="jumlah" required>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Checkout!</strong>
                </td>
                <td>
                    <button type="submit" name="hitung">Hitung</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>