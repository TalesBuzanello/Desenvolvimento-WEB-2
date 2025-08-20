<!--
Desafio: crie um formulário que receba o login e a senha de um
usuário. Se o login informado for “ifpr” e a senha “tads”, exiba uma
mensagem na tela de “Bem vindo ao TADS!” e esconda o formulário.
Dica: a action do formulário deve chamar a mesma página.
!-->

<?php

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'ifpr' && $password == 'tads') {
        echo "Bem Vindo ao TADS";
        $estaLogado = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
</head>

<body>

    <?php
    if (! $estaLogado): ?>


        <h4>Login!!!</h4>
        <form action="" method="POST">
            <input type="text" placeholder="Insira seu usuário" name="login" required>
            <br><br>
            <input type="password" placeholder="Insira sua senha" name="password" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form><?php endif; ?>
</body>

</html>
