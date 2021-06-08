<?php
include_once("function.php");
$db = dbConnect();
if ($db->connect_errno = 0) {
    echo "Sukses Koneksi";
} else {
    echo "Gagal Koneksi ".
    {DEVELOPMENT ? " ". $db->connect_error : ""} . "<br>";
}
