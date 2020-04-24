<?php

/**

 * User: Naam

 * Date: Date

 * Time: 12:06 PM

 * File: index.php

 */



$trafficLightColor = "groen";

$ambulanceComing = false;

$driveOn = true;



if ($trafficLightColor == "groen" && $ambulanceComing == false) {

    $driveOn = true;

}

else if ($trafficLightColor == "groen" && $ambulanceComing == true  ) {

    $driveOn = false;

}

else if ($trafficLightColor == "oranje" && $ambulanceComing == false) {

    $driveOn = false;

}

else if ($trafficLightColor == "oranje" && $ambulanceComing == true  ) {

    $driveOn = false;

}

else if ($trafficLightColor == "rood" && $ambulanceComing == false) {

    $driveOn = false;

}

else if ($trafficLightColor == "rood" && $ambulanceComing == true  ) {

    $driveOn = false;

}

//hier weet jij of je mag doorrijden.



if ($driveOn == false) {

    echo "U moet stoppen";

}

else if ($driveOn == true) {

    echo "U mag doorrijden";

}

?>


