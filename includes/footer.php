<?php

//echo "<p>The hour (of the server) is " . $t;
//echo ", and will give the following message:</p>";
$t = date("H");
$jaar = date('Y');
if ($t > 0 && $t < 5) {
    $greeting = "Goedennacht!";
} elseif ($t >5 && $t <12) {
    $greeting = "Goedemorgen!";
} if($t > 12 && $t <17) {
    $greeting = "Goedemiddag!";
} if ($t > 17 && $t <24) {
    $greeting = "Goedennacht!";
}


echo "</div>
<footer>&copy; $jaar $greeting</footer>
</body>
</html>";
