<?php
/**
 * User: Isahak Farah
 * Date:
 * Time:
 * File:
 */
?>

<?php
include "../Includes/Header.php"
?>

<form action="opdracht5.4.php" method="post">
    <label>Komt er een ambulance aan?</label>
    <label><input name="ambulanceComing" type="radio" value="ja">ja</label>
    <label><input name="ambulanceComing" type="radio" value="nee">nee</label><br>

    <label>
        Stoplicht kleur?
    </label>
    <label><input name="trafficLightColor" type="radio" value="Groen">Groen</label>
    <label><input name="trafficLightColor" type="radio" value="Oranje">Oranje</label>
    <label><input name="trafficLightColor" type="radio" value="rood">Rood</label><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
    if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing'])) {
        echo "Of stoplicht kleur is onbekend of het is onbekend of de ambulance komt.";
    }

    else
    {
        $trafficLightColor = $_POST['trafficLightColor'];
        $ambulanceComing = $_POST['ambulanceComing'];
        echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
ambulance aan.";
        // Wel of niet doorrijden
        if ($trafficLightColor == "groen" && $ambulanceComing == 'nee')
        {
            echo "<div class='groen box'>U mag doorrijden";
        }

        else
        {
            echo " <div class='rood box'>U moet stoppen";
        }
        echo "</div>";
    }
}
?>


