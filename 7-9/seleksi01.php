<?php
include_once("function.php");
$db = dbConnect();
if ($db->connect_errno == 0) {
    $sql = "SELECT IdPegawai, concat(NamaDepan,'',NamaBelakang) Nama, Jabatan From pegawai order by IdPegawai";
    $res = $db->query($sql);
    if ($res) {
        echo "data yang dtemukan : " . $res->num_rows . "<br>";
        $data = $res->fetch_row();
        var_dump($data);
    } else {
        echo "error " .
            (DEVELOPMENT ?  $db->connect_error : "Hubungni admin");
    }
} else {
    echo "Gagal Koneksi " .
        (DEVELOPMENT ?  $db->connect_error : "");
}
