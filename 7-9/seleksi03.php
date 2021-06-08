<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleksi Data</title>
</head>

<body>
    <?php
    include_once("function.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $sql = "SELECT IdPegawai, concat(NamaDepan,'',NamaBelakang) Nama, Jabatan From pegawai order by IdPegawai";
        $res = $db->query($sql);
        if ($res) {
    ?>
            <table border="1">
                <tr>
                    <th>Id Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                </tr>
                <?php
                $data = $res->fetch_all(MYSQLI_ASSOC);
                foreach ($data as $barsdata) {
                ?>
                    <tr>
                        <td><?php echo $barsdata["IdPegawai"] ?></td>
                        <td><?php echo $barsdata["Nama"] ?></td>
                        <td><?php echo $barsdata["Jabatan"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
    <?php
        } else
            echo "error : " . $db->error . "<br>";
    } else
        echo "error koneksi db";
    ?>
</body>

</html>