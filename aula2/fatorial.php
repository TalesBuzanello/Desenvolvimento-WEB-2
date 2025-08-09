<?php

//1 - Função para calcular o fatorial
function fatorial($n){
    $fat = 1;
    for($i=$n; $i >= 1; $i--){
        //$fat = $fat * $i;
        $fat *= $i;
  }
  return $fat;
}


//2 - Chamar a função de 5 a 12, imprimindo os resultados
for ($i=5; $i<= 12; $i++){
    //Chamar a função, passando o número
    
    /*$fat = fatorial($i);
    echo $fat . "<br>";
    */
    echo fatorial($i) . "<br>";
}
