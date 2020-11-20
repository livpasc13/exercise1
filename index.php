<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="fundo">
    <center> 
        <h1>Formulário do aluno:</h1>
        <?php
        ?>
        <table border="2" class="cor">
            <form action="recebe1.php" method="POST">
                <tr>
                    <td>Nome:</td> 
                    <td><input type= "text" name="nome"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td><input type="radio" name="sexo" value="M"> Masculino 
                    <input type="radio" name="sexo" value="F"> Feminino </td>
                </tr>
                <tr>
                    <td>Escolaridade:</td>
                    <td><input type="text" name="escolaridade"></td>
                </tr>
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type= "date" name="data"></td> 
                </tr>
        </table>
        <input type="submit" value="enviar" name="enviar">
        <input type="reset" value="cancelar" name="cancelar">
            </form>
            <h3>Lívian Pascoal - INF 161</h3>
    </center>
    </body>
</html>
