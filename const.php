<?php
class Math
{
    const PI = 3.1429;
    function luasLingkaran($radius)
    {
        return self::PI * $radius * $radius;
    }
}
echo "Nilai PI:" . Math::PI . "<br>";
$m = newMath();
echo "LuasLingkarandenganRadius10:" . $m->luasLingkaran(10);
?>