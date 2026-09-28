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
    <title>LISTA DE HOTÉIS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f0f4f8;
            padding: 30px;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background-color: #ffffff;
        }

        th {
            background-color: #2c539e;
            color: #ffffff;
            padding: 15px 20px;
            text-align: left;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 20px;
            color: #333333;
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.2s ease;
        }

        tr:hover td {
            background-color: #f5f7fa;
        }

        tr:last-child td {
            border-bottom: none;
        }

        a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
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
                    <td> <a href='ver_quartos.php?id_hotel=".$linha['id']."'>VER QUARTOS</a></td>
                </tr>
            ";
        }
        ?>
    </table>
</body>
</html>