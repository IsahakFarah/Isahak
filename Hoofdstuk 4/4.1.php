<!DOCTYPE html>
<h1> ICT ACADEMIE</h1>

<?php

date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";


$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t < "0 - 5") {
    echo "Goedennacht!";
} elseif ($t < "5 - 12") {
    echo "Goedemorgen!";
} if($t < "12 - 17") {
    echo "Goedemiddag!";
} if ($t < "17 - 24") {
    echo "Goedennacht!";
}

