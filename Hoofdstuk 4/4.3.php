<?php
/**
 * User:IsahakFarah
 * Date:
 * Time:
 * File:
 */


include "../includes/Header.php";
include "4.3.php";




/**
 * User: Isahak Farah
 * Date:
 * Time:
 * File:
 */

$task2 = "Lancering in :";
$counter = 20;
while ($counter >= 0)
{
    $task2 = $task2.", ".$counter;
    $counter--;
}

$task3 = "Lancering in: ";
for ($counter2 = 20; $counter2 >= 0; $counter2--)
{
    $task3 = $task3.", ".$counter2;
}

$task4 = "";
$counter3 = 1;
while ($counter3 <= 6)
{
    $task4 .= "dit is de ". $counter3. "e interatie". "<br>";
    $counter3++;
}

$task5 = "";
for ($counter4 = 1; $counter4 <= 6; $counter4++)
{
    $task5 .= "dit is de ". $counter4. "e interatie". "<br>";
}

$task6 = "";
$counter5 = 2020;
$leeftijd = 18;
while ($counter5 >= 2002)
{
    $task6 .= "In ". $counter5." was ik ". $leeftijd." jaar oud"."<br>";
    $counter5--;
    $leeftijd--;
}

$task7 = "";
$leeftijd = 18;
for ($counter6 = 1; $counter6 <= 6; $counter6++, $leeftijd--)
{
    $task7 .= "In ". $counter6." was ik ". $leeftijd." jaar oud"."<br>";
}
?>

