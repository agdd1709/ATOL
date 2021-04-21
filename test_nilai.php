<?php
include_once("nilai.php");
$NilaiAndi = new Nilai();
$NilaiAndi->nilaiTugas=70;
$NilaiAndi->nilaiUTS=80;
$NilaiAndi->nilaiUAS=75;
echo "Tugas : ".$NilaiAndi->nilaiTugas."<br>";
echo "UTS   : ".$NilaiAndi->nilaiUTS."<br>";
echo "UAS   : ".$NilaiAndi->nilaiUAS."<br>";
echo "Nilai Akhir : ".$NilaiAndi->getNilaiAkhir()."<br>";
echo "Nilai Index : ".$NilaiAndi->getIndex()."<br>";
?>