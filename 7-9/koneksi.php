<?php
$db = new mysqli("localhost", "root", "", "db10119040");
if ($db->connect_errno == 0) {
    echo " Sukses koneksi ke databases";
} else {
    echo "Error " . $db->connect_errno . " : " . $db->connect_error . "<br>";
}
