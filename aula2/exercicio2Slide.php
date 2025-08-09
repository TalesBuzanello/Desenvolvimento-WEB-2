<?php

$aluno0 = array (
    "nome" => "Manuel de Medeiros",
    "endereco" => "Rua das Acacias",
    "cidade" => "Foz do Iguaçu",
    "UF" => "PR"
);

$aluno1 = array (
    "nome" => "Juliana de Amaral",
    "endereco" => "Rua dos Pinheiros",
    "cidade" => "Florianópolis",
    "UF" => "SC"
);

$aluno2 = array (
    "nome" => "Rodrigo Baidek",
    "endereco" => "Rua Dom Pedro I",
    "cidade" => "Petrópolis",
    "UF" => "RJ"
);

$aluno3 = array (
    "nome" => "Fabíola da Silva",
    "endereco" => "Rua Chile",
    "cidade" => "Guarulhos",
    "UF" => "SP"
);


$alunos = array($aluno0, $aluno1, $aluno2, $aluno3);

echo "<table border = 1>";

echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Endereco</th>";
echo "<th>Cidade</th>";
echo "<th>UF</th>";
echo "</tr>";

foreach ($alunos as $al){
    echo "<tr>" . "<td>" . $al["nome"] . "</td>" . "<td>" . $al["endereco"] . "</td>" . "<td>" . $al["cidade"] . "</td>" . "<td>" . $al["UF"] . "</td>" . "</tr>";
}

echo "</table>";
