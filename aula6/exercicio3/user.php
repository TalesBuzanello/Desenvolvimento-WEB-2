<!--
Desafio: crie um formulário que receba o login e a senha de um
usuário. Se o login informado for “ifpr” e a senha “tads”, exiba uma
mensagem na tela de “Bem vindo ao TADS!” e esconda o formulário.
Dica: a action do formulário deve chamar a mesma página.
!-->

<?php
    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user == 'ifpr' && $password == 'tads')
        echo "Bem Vindo ao TADS";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Insira seu usuário" name="user">
        <br><br>
        <input type="password" placeholder="Insira sua senha" name="password">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

