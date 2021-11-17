<?php
echo "<h2>Matemaatika tehed. Mõistatus.</h2>";
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=5;
$arv2=10;
//kahe arvude liitmine(+)
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastuseks on ".($arv1/$arv2);
//esimene arv ruudus
echo "Esimene arv ruudus".pow($arv1, 2);
echo "<br>";
//lahutamine
echo "Kui lahutame, vastus on ".($arv1-$arv2);
echo "<br>";
//korrutis
echo "Kui esimene arv korrutame teise arvuga, vastus on ".($arv1*$arv2);
echo "<br>";
echo "<a href='vastus.php'>Õiged vastused</a>";

echo "<br>";
echo "<h2>Arva ära EESTI LINNANIMI</h2>";
echo "<br>";
$nimi="Tartu";

//teksti pikkus
echo "<br>Linnanimi pikkus: ".strlen($nimi);

//esimene taht
echo "<br>Linnanimi 1. täht - ".substr($nimi, 0,1);
//kõik tähed
echo "<br>Reversed - ".strrev($nimi);
//
echo "<br>Shuffle - ".str_shuffle($nimi);
?>
