<?php
/**
 * User: Isahak Farah
 * Date:
 * Time:
 * File: Opdracht4.4.php
 */

?>

<?php
echo "<h1>oefening 4.4</h1>";
$nu = strtotime("now");
$datumVandaag = date('d-m-y', $nu);

$datumDag = date('w', $nu);
echo "Vandaag is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo "<br>";
$dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
echo "Vandaag is het ".$dagenWeek[$datumDag] . " en datum is ". $datumVandaag;

$nu = strtotime('+1 days');
$datumVandaag = date('d-m-y', $nu);
$datumDag = date('w',$nu);

echo "<br>Morgen is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo"<br>";
echo "Morgen is het ".$dagenWeek[$datumDag]. " en de datum is ". $datumVandaag;
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

?>
