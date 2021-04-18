<?php
$ibukota = array(
    "jabar" => "Bandung",
    "jateng" => "Semarang",
    "jatim" => "Surabaya",
    "bali" => "Denpasar",
    "banten" => "Serang"
);
asort($ibukota);
echo "Data telah di urutkan secara asort";
echo "<pre>" . print_r($ibukota, true) . "</pre>";
arsort($ibukota);
echo "Data telah di urutkan secara arsort";
echo "<pre>" . print_r($ibukota, true) . "</pre>";
ksort($ibukota);
echo "Data telah di urutkan secara ksort";
echo "<pre>" . print_r($ibukota, true) . "</pre>";
krsort($ibukota);
echo "Data telah di urutkan secara krsort";
echo "<pre>" . print_r($ibukota, true) . "</pre>";
