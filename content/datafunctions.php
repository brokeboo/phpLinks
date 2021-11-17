<?php
include('funktsioonid.php');
?>
<body>
<h1>Kuupäeva funktsioonid</h1>
<ol>
    <li>time()</li>
    <li>date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>
<h1>Ülesanded</h1>
<section>
    <h2>Kuupäev ja aeg formaadis 11/16/2021 10:26</h2>
    <?php
    echo date('m/d/Y');
    ?>
</section>
<section>
    <h2>Kasutaja vanus 16.11.2021</h2>
    <?php
    echo getVanus();
    ?>
</section>
<section>
    <h2>Järgmine kooli vaheaeg on 20.12.21</h2>
    <?php
    echo getKoolivaheajani();
    ?>
    <h2> 2022 uue aastani on </h2>
    <?php
    //tänane aasta
    $year=date('Y');
    $last_day=strtotime('last day of December');
    //
    $date_today=strtotime("now");
    $diff_to_last_day=$last_day-$date_today;
    echo "<br>";
    echo $year." aasta lõpuni ". floor($diff_to_last_day/(60*60*24))." päeva";
    ?>
</section>
<section>
    <h2>Hooja pilt</h2>
    <img src="<?php getHooaeg() ?>" alt="pilt">
</section>
</body>
</html>
<?php
