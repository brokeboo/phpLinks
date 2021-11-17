<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
<h1>Ülesanne 403</h1>
<?php
$varv=array("BlueViolet", "Crimson", "DarkCyan", "DeepPink", "PaleGreen", "PeachPuff", "LightSkyBlue", "Thistle", "SandyBrown", "PaleVioletRed", "Navy", "LightSlateGray", "LightSalmon", "LightCoral", "Indigo");
for($i=0;$i <15; $i++){
    echo "<span style='color: $varv[$i]'>$varv[$i]</span><br>";
}
?>
<br>
<a href='../content/test.php'>tagasi</a>;
