elseif ($uur >= 17 && $uur <= 0){
$moment = 'Goedenavond';
}
?>
<?php

    else {
    $persoon = "onbekende bezoeker". "&nbsp;<a href='6.1.php'>Login</a>";
}
    echo $moment . " " . $persoon . ', &copy; ' . $jaar;
    ?>
</div>
2  hoofdstuk6/Opdracht_6.1.php
@@ -18,9 +18,11 @@
<input type="password" name="password"><br>
<input type="submit" value="Submit">
</form>

<?php


2  hoofdstuk6/checklogin.php
@@ -25,7 +25,7 @@
session_start();
$_SESSION['username'] = $_POST['username'];
header('location: welkom.php');
} else {
} else{
$bericht = "Ongeldige username/wachtwoord, probeer het nog eens.";
}
}
1  hoofdstuk6/loguit.php
@@ -15,6 +15,7 @@

session_start();
session_destroy();

header('location: Opdracht_6.1.php');

?>
2  hoofdstuk6/welkom.php
@@ -12,7 +12,9 @@
?>

<?php

echo "Welcome, Thanks for logging in."

?>

<?php

