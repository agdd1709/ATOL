<?php
$ibukota = array(
    "jabar" => "Bandung",
    "jateng" => "Semarang",
    "jatim" => "Surabaya",
    "bali" => "Denpasar",
    "banten" => "Serang"
);
echo "Hanya mengambil value saja : <br>";
foreach ($ibukota as $kota)
    echo  $kota . "<br>";
echo "<br>";
echo "mengambil value dan key : <br>";
foreach ($ibukota as $key => $kota)
    echo  "Ibukota $key adalah $kota<br>";
