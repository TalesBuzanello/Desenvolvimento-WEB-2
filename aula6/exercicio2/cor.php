<!--
Crie uma página com um formulário onde o usuário seleciona uma
cor em um select. Após submeter a escolha, altere a cor de fundo da
página que será exibida. Disponibilize as seguintes cores para serem
selecionadas: http://www.w3schools.com/html/html_colors.asp
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>
</head>
<body>
    <form method="POST" action="cor_exec.php">
        <select name="cor">
            <option value="">---Selecione uma Cor---</option>
            <option value="tomato">Vermelho</option>
            <option value="Orange">Laranja</option>
            <option value="DodgerBlue">Azul Marinho</option>
            <option value="MediumSeaGreen">Verde Marinho</option>
            <option value="Gray">Cinza</option>
            <option value="SlateBlue">Azul Meio Roxo</option>
            <option value="Violet">Rosa</option>
            <option value="LightGray">Cinzinha</option>
        </select>

        <br><br>

        <button type="submit">Enviar</button>
        
    </form>
    
</body>
</html>
