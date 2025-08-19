<?php

if(isset($_GET["cor"])) {
$cor = $_GET["cor"];

echo "<style";
echo " body { background-color: " . $cor . "}";
echo "</style>";

/*
echo "body style='background-color:" . $cor . "'>";
echo "</body>";
*/
} else {
    echo "Informe o parâmetro cor";
}
