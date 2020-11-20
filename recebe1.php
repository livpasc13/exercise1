<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
    <center> 
        <h1>Formulário do aluno:</h1>
        <?php
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $escolaridade = $_POST["escolaridade"];
        $data = $_POST ["data"];
        ?>
        <table border="1"> 
                 <tr>
                <td> <?php echo "Nome:";?></td>
                <td><?php echo "$nome <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Sexo: ";?></td>
                <td><?php echo "$sexo <br>";?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Escolaridade:";?></td>
                <td><?php echo "$escolaridade <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Data de Nascimento: ";?></td>
                <td><?php echo "$data <br>";?> </td>
                
            </tr>
            </table>
        
    </center>
    </body>
</html>
