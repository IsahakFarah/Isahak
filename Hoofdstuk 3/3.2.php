<?php
/**
 * User: Isahak Farah
 * Date: xxxxxxxx
 * Time: 22:07
 * File: 3.2.php
 */
?>

<!DOCTYPE html>
<html lang="nl, eng">
<head>

    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
</head>
<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <h1>Taak 1 & 2</h1>
    <?php
    $trafficLightColor = "groen"; // colors: groen, rood en orange
    $ambulanceComing = false; //options: true or false

    if($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        $driveOn = true;
    }
    else
    {
        $driveOn = false;
    }
    if($driveOn == true)
    {
        echo ("<p><span style=\"color:lawngreen;text-align:center;\">U mag doorrijden</span></p>");
    }
    else if($driveOn == false)
    {
        echo ("<p><span style=\"color:red;text-align:center;\">U moet stoppen</span></p>");
    }
    ?>
    <h1>Taak 3</h1>
    <?php

    $Age = 17;

    $country = "Nederland";

    if($country == "Belgie")
    {
        if($Age >= 16 && $Age <=17)
        {
            echo ("Je mag hier zwakke alchol drinken");
        }
        else if($Age >= 18)
        {
            echo("Je mag hier alle alcohol drinken");
        }
    }
    else if(($country == "Bulgarije" || $country== "Nederland") && $Age == 18)
    {
        echo("Je mag hier alle alcohol drinken");
    }

    if($country== "Cyprus" && $Age >= 17)
    {
        echo("Je mag hier sterke en zwakke alcohol drinken.");
    }
    else if($country == "Cyprus" && $Age < 17)
    {
        echo("Hier mag je geen alcohol drinken.");
    }

    else if ($country == "Zweden"){
        if($Age >= 18 && $Age <=19)
        {
            echo ("Je mag hier zwakke alchol drinken");
        }
        else if($Age >= 20){
            echo("Je mag hier alle alchol drinken");
        }
    }
    else if($Age <= 15)
    {
        echo("Je mag nog geen alchol drinken");
    }
    echo ("Je woont in $country en bent $Age jaar oud");
    ?>
</div>
</body>
</html>


