<?php
/**
 * User: Isahak Farah
 * Date: 1-3-2020
 * Time: 18:56
 * File: opdracht3.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <?php
    $evenement = "elfstedentocht";

    $Fries = "Alvestêdetocht";

    $kilometer = 200;

    $typeTocht = "schaatstocht";

    $soortIjs = "natuurijs";

    $organisator = "Koninklijke Vereniging De Friesche Elf Steden";

    $locatie = "Leeuwarden";

    $provincie = "Friesland";

    $aantalVerreden = 15;

    $eersteKeer = 1909;

    $maxPerWinter = 1;

    $verhaal = "De $evenement (Fries: $Fries) is een $kilometer
                kilometer lange $typeTocht over $soortIjs die wordt
                georganiseerd door de $organisator. $locatie, de hoofdstad van $provincie, is start- en
                aankomstplaats. De $evenement is inmiddels $aantalVerreden maal
                verreden en werd voor het eerst in $eersteKeer gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("$verhaal");
    $verhaal2 = "De " . $evenement .  " (Fries: " . $Fries . ") is een " . $kilometer . " kilometer lange " . $typeTocht. " over " . $soortIjs . " die wordt
                georganiseerd door de " . $organisator .". " . $locatie. ",  de hoofdstad van " . $provincie. ",  is start- en
                aankomstplaats. De " . $evenement . " is inmiddels " . $aantalVerreden . " maal
                verreden en werd voor het eerst in " . $eersteKeer . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("$verhaal2");
    ?>
</div>
</body>
</html>