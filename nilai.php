<?php
class Nilai
{
    //property declaration
    var $nilaiTugas = 0;
    var $nilaiUTS = 0;
    var $nilaiUAS = 0;

    //method declaration
    function getNilaiAkhir()
    {
        $na = $this->getNilaiAkhir();
        if ($na >= 80) return "A";
        else 
        if ($na >= 68) return "B";
        else
        if ($na >= 56) return "C";
        else
        if ($na >= 45) return "D";
        else 
        if ($na >= 0) return "E";
    }
}
// end of class
?>
<?php
include_once("nilai.php");
$NilaiAndi = new Nilai();
$NilaiBudi = new Nilai();
