<?php
/**
 * User: Isahak farah
 * Date:
 * Time:
 * File:
 */

?>

<?php
include "../includes/Header.php"
?>

<?php
echo "<h1>oefening 4.4</h1>";
$nu = strtotime("now");
$todayDate = date('d-m-y', $nu);

$dagDatum = date('w', $nu);
echo "Vandaag is het de ".$dagDatum. " dag en de datum is ".$todayDate;
echo "<br>";
$dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
echo "Vandaag is het ".$dagenWeek[$dagDatum] . " en datum is ". $todayDate;

$nu = strtotime('+1 days');
$datumVandaag = date('d-m-y', $nu);
$dagDatum = date('w',$nu);

echo "<br>Morgen is het de ".$dagDatum. " dag en de datum is ".$todayDate;
echo"<br>";
echo "Morgen is het ".$dagenWeek[$dagDatum]. " en de datum is ". $todayDate;
?>

<?php

echo "<br>";
echo "<br>";

echo "<h1>Opdracht 4.4</h1>";

$dagenVanDeWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
$test = "";
for($x=0; $x <8; $x++) {
    $dagnr = date('w', strtotime("+$x days"));
    $eendatum = date('d-m-Y', strtotime("+$x days"));
    $test .= "Dag $dagnr is {$dagenVanDeWeek[$dagnr]} $eendatum <br>";
}
echo $test
?>

<?php
include "../includes/Footer.php"
?>