<?php
// vanuse leidmine funktsioon
function getVanus(){
    echo '<form method="post" action="">';
    echo 'Palun sinu sünnipäev';
    echo '<input type="date" name="age">';
    echo '<input type="submit" value="Arvuta vanus" name="arvuta">';
    echo '</form>';
    if (isset($_POST['arvuta'])){
        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd),date_create('16.11.21'));
        $result=$diff;
        echo '<br>';
        echo $result->format('%y').'aastat vana' ;
    }
}
function getKoolivaheajani(){
    $today=date('m.d.Y');
    $kool=date('12.20.2021');
    $diff=date_diff(date_create($today), date_create($kool));
    echo '<br>';
    echo 'Talve koolivaheajani on '.$diff->format('%a').' päeva';
}

function getHooaeg(){
    //vastavalt tänase kuupäeva näitab hooja pilti
    //piltide massiv
    $pildid=array(
        "sygis"=>"photo/osen.jpg",
        "talv"=>"photo/zima.jpg",
        "kevad"=>"photo/vesna.jpg",
        "suvi"=>"photo/leto.jpg");
    $paev=date("z");
    //sygis
    $sygis_algus=date("z", strtotime("September 1"));
    $sygis_lopp=date("z", strtotime("November 30"));
    //talv
    $talv_algus=date("z", strtotime("December 21"));
    $talv_lopp=date("z", strtotime("Marth 20"));
    //kevad
    $kevad_algus=date("z", strtotime("Marth 20"));
    $kevad_lopp=date("z", strtotime("June 21"));

    //paev algus ja lõpu vahel
    if($paev>=$sygis_algus && $paev<=$sygis_lopp):
        $hooaeg="sygis";
    elseif($paev>=$talv_algus && $paev<=$talv_lopp):
        $hooaeg="talv";
    elseif($paev>=$kevad_algus && $paev<=$kevad_lopp):
        $hooaeg="kevad";
    else : $hooaeg="suvi";
    endif;
    $hooajepilt=$pildid[$hooaeg];
    echo $hooajepilt;

}

?>
