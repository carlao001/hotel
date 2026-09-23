<?php

require_once 'conexao.php';

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>NOME:</th>
            <th>CIDADE:</th>
            <th>ESTRELAS:</th>
            <th>AÇÃO:</th>
        </tr>
        <?php
        while ($linha = mysqli_fetch_assoc($resultado)){
            echo "
                <tr>
                    <td>".$linha['nome']."</td>
                    <td>".$linha['cidade']."</td>
                    <td>".$linha['estrelas']."</td>
                    <td><a href='ver_quartos.php?id_hotel=".$linha['id']."'>VER QUARTOS</a></td>
                </tr>
            ";
        }
        ?>
    </table>
</body>
</html>