<?php
$link = mysqli_connect("localhost", "root", "", "test");
if(!$link){
    printf ("Erro ao conectar ao banco de dados: ", 
    mysqli_connect_errno());
}

$lista = mysql_query($link, "SELECT * FROM etepac");
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
            }
            th {
                text-align: left;
            }
            </style>
            </head>
        <body>
            <h2>Notas</h2>
            <table style = "width:100%">
            <tr>
                <th>Nome do Aluno</th>
                <th>Disciplina</th>
                <th>Nota 1</th>
        </th>
        <?php
        while($linha = mysql_fetch_array($lista)){
        ?>
        <tr>
            <td><?= $linha['aluno'] ?></td>
            <td><?= $linha['disciplina'] ?></td>
            <td><?= $linha['nota'] ?></td>
            <td><a href="formularioalterar.php?"id=<?= $linha['id'] ?>">Alterar</td>
            <td><a href="excluir.php?id=<?= $linha['id'] ?>">Gerar boletim</td>
        </tr>
        <?php
        }
        ?>
        </table>
    </body>
    </html>

