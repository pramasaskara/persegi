<?php
echo "Kode Program PHP - Keliling dan Luas Persegi";
echo "<hr>";

$sisi = 12.5;

$keliling_persegi = 4 * $sisi;
$luas_persegi = $sisi * $sisi;

echo "Panjang sisi persegi = $sisi <br>";
echo "Keliling persegi = (4 x $sisi) = $keliling_persegi <br>";
echo "Luas persegi = ($sisi x $sisi) = $luas_persegi <br>";

function rumus_persegi($sisi)
{
    $keliling_persegi = 4 * $sisi;
    $luas_persegi = $sisi * $sisi;

    echo "Panjang sisi persegi = $sisi <br>";
    echo "Keliling persegi = (4 x $sisi) = $keliling_persegi <br>";
    echo "Luas persegi = ($sisi x $sisi) = $luas_persegi <br>";
}

rumus_persegi(34);

class rumus_matematika
{
    function rumus_persegi($sisi)
    {
        $keliling_persegi = 4 * $sisi;
        $luas_persegi = $sisi * $sisi;

        echo "Panjang sisi persegi = $sisi <br>";
        echo "Keliling persegi = (4 x $sisi) = $keliling_persegi <br>";
        echo "Luas persegi = ($sisi x $sisi) = $luas_persegi <br>";
    }
}
$keliling_persegi = new rumus_matematika();

$keliling_persegi->rumus_persegi(30);