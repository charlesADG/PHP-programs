<?php 

$SingleFamilyHome = 399500;
$SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);
echo "<p>The current median price of a single family home in Pleasanton, CA is $$SingleFamilyHome_Display.</p>";

$SingleFamilyHome = 399500.2468;
echo "<h1>Rounded form using functions:</h1>";
echo "Round = " , (round($SingleFamilyHome) . "<br>");
echo "Ceil  = " , (ceil($SingleFamilyHome) . "<br>");
echo "Floor = " , (floor($SingleFamilyHome));

/* PHP - Charles Garcia & Miguel Tiamzon
WD - 201 */

 ?>

