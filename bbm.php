<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga BBM</title>
    <style>
        td {
            text-align: right;
        }
    </style>
</head>

<body>
    <form method="POST">
        <table border="1">
            <tr>
                <th>Liter Awal</th>
                <th>Liter Akhir</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td><input type="text" name="awal" maxlength="3" size="4"></td>
                <td><input type="text" name="akhir" maxlength="3" size="4"></td>
                <td><input type="submit" name="tblsubmit" maxlength="3" size="4"></td>
            </tr>
        </table>
    </form>
    <hr>
    <?php
    if (isset($_POST["tblsubmit"])) {
    ?>
        <table border="1px">
            <tr>
                <th>Liter</th>
                <th>Premium</th>
                <th>Pertalite</th>
                <th>Pertamax</th>
                <th>Solar</th>
            </tr>
            <?php
            define("HARGA_PREMIUM", 6550);
            define("HARGA_PERTALITE", 7600);
            define("HARGA_PERTAMAX", 8900);
            define("HARGA_SOLAR", 5150);
            $awal = $_POST["awal"];
            $akhir = $_POST["akhir"];
            for ($liter = $awal; $liter <= $akhir; $liter++) {
            ?>
                <tr>
                    <td><?php echo $liter; ?></td>
                    <td>Rp <?php echo number_format($liter * HARGA_PREMIUM, 0, ",", "."); ?></td>
                    <td>Rp <?php echo number_format($liter * HARGA_PERTALITE, 0, ",", "."); ?></td>
                    <td>Rp <?php echo number_format($liter * HARGA_PERTAMAX, 0, ",", "."); ?></td>
                    <td>Rp <?php echo number_format($liter * HARGA_SOLAR, 0, ",", "."); ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    } else
        echo  "Isilah Liter awal dan liter akhir terlebih dahulu";
    ?>
</body>

</html>