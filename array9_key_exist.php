<?php
$ibukota = array(
    "jabar" => "Bandung",
    "jateng" => "Semarang",
    "jatim" => "Surabaya",
    "bali" => "Denpasar",
    "banten" => "Serang"
);
$provinsi = "bali";
if (array_key_exists($provinsi, $ibukota))
    echo "Privinsi $provinsi terdaftar di array";
else
    echo "Privinsi $provinsi tidak terdaftar di array";
?>