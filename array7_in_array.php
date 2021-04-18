<?php
$nama = array(
    "Alica", "Muhammad", "Rahmanita",
    "Idris", "Hamizan", "Dewi"
);
$dicari = "Idris";
if (in_array($dicari, $nama))
    echo "nama $dicari terdaftar di dalam array";
else
    echo "nama $dicari tidak terdaftar dalam array";
echo "<br>";

$dicari = "dewi";
if (in_array($dicari, $nama))
    echo "nama $dicari terdaftar di dalam array";
else
    echo "nama $dicari tidak terdaftar dalam array";
