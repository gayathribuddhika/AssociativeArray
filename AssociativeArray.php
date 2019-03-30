<?php

$food = array("pizza","pasta","hoppers","noodles");
print_r ($food);
echo "<br>";
echo $food[3];
echo "<br>";
echo "<br>";

$food = array("pizza"=>300,"pasta"=>1000,"hoppers"=>50,"noodles"=>25);
print_r ($food);
echo "<br>";
//echo $food[1];
echo $food["pizza"];



?>