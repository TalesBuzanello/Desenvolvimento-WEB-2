<?php
//veiculo_exec.php
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];
echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $modelo . "<br>";
echo "Marca: " . $marca . "<br>";
if($combust == 'A')
echo "Combustível: Alcool<br>";
else if($combust == 'G')
echo "Combustível: Gasolina<br>";
if($combust == 'F')
echo "Combustível: Flex<br>";
echo "<br><br>";
echo "<a href='veiculo.php'> Cadastrar outro veículo </a>";
