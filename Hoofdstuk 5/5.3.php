
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

    <form action="form_data53.php" method="post">

        <label>Corona enquete:</label><br>
        <hr>
        <label>Wat is je naam:</label><label><input name="First-LastName" type="text"></label<br><br>
        <label>Wat is je leeftijd:</label><label><input name="Age" type="number"></label><br>
        <label>Gemeente:</label>

        <select name="Township">
            <option value="Den Bosch">Den Bosch</option>
            <option value="Tilburg">Tilburg</option>
            <option value="Waalwijk">Waalwijk</option>
            <option value="Den Haag">Den Haag</option>
        </select><br>

        <label>Aantal inwoners gemeente:</label><label><input name="citizens" type="number"></label><br>
        <label>Ken je mensen die besmet zijn in je woonplaats?</label>
        <label><input name="Question" type="radio" value="Ja">Ja</input></label>
        <label><input name="Question" type="radio" value="Nee">Nee</input></label><br>
        <label>Aantal mensen besmet in je gemeente?*</label><label><input name="infected" type="number"></label><br>
        <input type="submit" name="verzenden" value="verzenden"><br>
        <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a></label>

    </form>
<?php

?>

<?php
include "../Includes/Footer.php"
?>

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

<?php
/*
 * echo van % tot en met 100
 */
function echoKans()
{
    echo ($_POST['infected'] * ($_POST['citizens']/100000) / $_POST['citizens']) * 100;
}
/*
 * kan 1 op ...
 */
function getKans1Op()
{
    return 100000 / $_POST['infected'];
}

/*
 * de kan van 1 op ... normale doodsoorzaken
 * en vergelijkt met andere oorzaken
 */
function vergelijkOorzaken($covidkans)
{

    $kansen =[119998,81701,62950,51199,6174,5981,5862,4147,1235,1073,802,623,300,272,184,139,115,85,28,7,6];
    $oorzaken = ["door uitdroging sterven"," bliksem schigt "," killebee aanval"," Omkomen in een tornado"," dood gebeten worden door hond/en"," geraakt worden door een objecct door storm "," Omkomen in een"," aangereden worden op een fiets"," verbranden"," Verdrinken"," motorongeluk"," Overreden worden"," Neergeschoten worden"," Slachtoffer worden van een auto-ongeluk als passagier"," Omkomen door een vechtpartij","omkomen door alergie"," zelfmoord ","sclachoffer van een auto/motor ongeluk","omkomen door een hartaanval"," omkomen door ziekte"," Hart- en vaatziekten"];

    $i = 0;
    while ($covidkans < $kansen[$i])
    {
        $i++;
        if ($i >= count($kansen))
            break;
    }

    //wat je kans is op covid
    if ($i == 0 ){
        return "Kans op '".strtolower($oorzaken[0])."(1 op {$kansen[0]})' is groter dan je wordt besmet op Corona";
    }
    elseif ($i >= count($kansen)) {
        return "Kans dat je wordt besmet door corona is groter dan de kans op '".$oorzaken[count($kansen) - 1]." (1 op {$kansen[$i -1]})'";
    }
    else {
        return "Kans dat je wordt besmet is groter dan op de kans op '".$oorzaken[ $i -1 ].
            "(1 op {$kansen[$i -1]})'<br> maar kleiner dan de kans op '".$oorzaken[$i]."(1 op {$kansen[$i]})'";
    }
}
?>

<?php
include "../Includes/Footer.php"
?>


    Form_data53.php

<?php
/**
 * User: Isahak Farah
 * Date:
 * Time:
 * File:
 */
?>

<?php

?>

    <table>
        <tr>
            <td>bedrijfsnaam:</td>
            <td><?php echo $_GET["bedrijfsnaam"]; ?>.<br /></td>
        </tr>
        <tr>
            <td>voornamen:</td>
            <td><?php echo $_GET["voornamen"]; ?>.<br /></td>
        </tr>
        <tr>
            <td>achternaam:</td>
            <td><?php echo $_GET["achternaam"]; ?>.<br /></td>
        </tr>
        <tr>
            <td>tellnummer:</td>
            <td><?php echo $_GET["tellnummer"]; ?>.<br /></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><?php echo $_GET["E-mail"]; ?>.<br /></td>
        </tr>
        <tr>
            <td>toevoeging:</td>
            <td><?php echo $_GET["toevoeging"]; ?>.<br /></td>
        </tr>
    </table>

<?php
include "../Includes/Footer.php"
?>