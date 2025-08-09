<?php

$numeros =  array (5, 16, 7, 9, 12);  //define o array

echo $numeros[3];  //printa o array da posicao [3]

$numeros[2] = 3;  //altera o numero da posicao [2] do array

echo "<br>Impressão dos elementos do array<br>" ; 

array_push($numeros, 8); //Insere mais um número no array


//percorre o array de uma maneira mais simples
foreach($numeros as $num){
    echo $num . "<br>";
}

/*  IDEIA PARA PERCORRER O 'ARRAY' COM 'FOR' COMUM

for ($i = 0; $i<count($numeros); $i++){
    echo $numeros[$i] . "<br>";
}
*/