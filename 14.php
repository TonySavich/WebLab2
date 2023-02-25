<?php

$a=10;
$b=3;
if ($a%$b == 0){
  echo "Делится ", $a/$b;
}else{
  echo "Делится с остатком ", $a%$b;
}

$st = pow(2,10);
echo "\n", $st;
$st = sqrt(245);
echo "\n", $st;

$array = array(4, 2, 5, 19, 13, 0, 10);
$res = 0;
foreach ($array as $value) {
    $res += $value**2 ;
}
echo "\n", sqrt ($res), "\n";


echo "\n", round (sqrt(379),);
echo "\n", round (sqrt(379), 1);
echo "\n", round (sqrt(379),2), "\n";


$mas = array(
  "floor" => floor(sqrt(587)),
  "ceil" => ceil(sqrt(587))
  );
  
  foreach ($mas as $value) {
    echo "\n", $value, " " ;
}

$arr = array(4, -2, 5, 19, -130, 0, 10);
echo "\n", min($arr), " ", max($arr);


echo "\n";
echo "\n", rand(1, 100);
$mm = array();
$r = 1;
while ($r < 11){
  $mm[$r] = rand(1, 100);
  $r +=1;
  
}
echo "\n";
  foreach ($mm as $value) {
    echo "\n", $value, " " ;
}

?>
