<?php

$pessoa = array (
    "nome" => "Tales",
    "idade" => 26
);

/*
echo $pessoa["nome"] . "<br>";


foreach($pessoa as $p)
    echo $p . "<br>";
*/

$pessoa2 = array (
    "nome" => "Julia",
    "idade" => "28"
);

//Cria a array $pessoas juntando os primeiras 

$pessoas = array($pessoa, $pessoa2);

//percorre a array que contém as outras duas arrays e printa elas.

foreach ($pessoas as $p) {
    echo $p["nome"] . " - " . $p["idade"];
    echo "<br>";
}
