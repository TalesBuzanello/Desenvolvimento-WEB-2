<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$times0 = array ("Santos", "Vasco", "Botafogo", "São Paulo", "CRB");
$times1 = array ("Santos1", "Vasco1", "Botafogo1", "São Paulo1", "CRB1");
$times2 = array ("Santos2", "Vasco2", "Botafogo2", "São Paulo2", "CRB2");
$times3 = array ("Santos3", "Vasco3", "Botafogo3", "São Paulo3", "CRB3");
$times4 = array ("Santos4", "Vasco4", "Botafogo4", "São Paulo4", "CRB4");

echo "<ol>";

foreach ($times0 as $t) {
    echo "<li>" . $t . "</li>";
}
echo "</ol>";

/* ==== UTILIZANDO UM FOR ====
for($i=0; $i<=5 ;$i++){
    echo "<li>" . $times0[$i] . "</li>";
}
*/

echo "<br><br><ol>";

foreach ($times1 as $t){
    echo "<li>" . $t . "</li>";
}
echo "</ol>";

echo "<br><br><ol>";

foreach ($times2 as $t){
    echo "<li>" . $t . "</li>";
}
echo "</ol>";

echo "<br><br><ol>";

foreach ($times3 as $t){
    echo "<li>" . $t . "</li>";
}
echo "</ol>";

echo "<br><br><ol>";

foreach ($times4 as $t){
    echo "<li>" . $t . "</li>";
}
echo "</ol>";

