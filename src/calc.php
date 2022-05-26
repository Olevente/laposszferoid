<!--
File: calc.php
Author: Orosz Levente
Copyright: 2022, Orosz Levente
Group: Szoft I N
Date: 2022-05-26
Github: https://github.com/Olevente/
Licenc: GNU GPL
-->

<?php

echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/calc.html');


function Szamit($aTengely, $bTengely){
    $terfogat = (4*M_PI/3)*(pow($aTengely,2)*$bTengely);

    return $terfogat;
}

    if(!empty($_GET['aTengely']) and !empty($_GET['bTengely']))
    {
        $aTengely = $_GET['aTengely'];
        $bTengely = $_GET['bTengely'];
        $terfogat = Szamit($aTengely, $bTengely);
    }
    else{
        $terfogat = 'Hiba';
    }

    $terfogat = Szamit($aTengely, $bTengely);

    $page = str_replace('{{eredmény}}', $terfogat, $page);
    
    echo $page;
    echo file_get_contents('templates/foot.html');
?>
 