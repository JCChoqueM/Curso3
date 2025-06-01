<?php include 'includes/header.php';


$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numero4="40";
var_dump($numero1 > $numero2."<br>"); // false
var_dump($numero1 < $numero2."<br>"); // true
var_dump($numero1 == $numero2."<br>"); // false
echo "<br>";
var_dump(5 <=> 7); // true
echo "<br>";
var_dump(5 <=> 5); // false
echo "<br>";
var_dump(5 <=> 3); // false
include 'includes/footer.php';