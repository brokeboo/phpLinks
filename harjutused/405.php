<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>405</title>
    <style>
        table, td{
            border: solid 2px;
            padding: 20px;
            text-align: center;
            }
    </style>
</head>
<body>
<h1>Ulesanne 405 - Korrutustabel 2 tsükliga</h1>
<?php
    echo "<table>";
    for ($i=1; $i<=10; $i++){
        echo "<tr>";
        for ($j=1; $j<=10; $j++){
            $val=$i*$j;
            echo "<td>".$val."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>
<br>
<a href='../content/test.php'>tagasi</a>;
</body>
</html>