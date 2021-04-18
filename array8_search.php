<?php
$nama = array(
    "Alica", "Muhammad", "Rahmanita",
    "Idris", "Hamizan", "Dewi"
);
$dicari = "Idris";
$posisi = array_search($dicari, $nama);
if ($posisi === false)
echo "Nama $dicari tidak di temukan";
else
echo "Nama $dicari ditemukan di posisi ke-$posisi";
