<?php
require_once "conexao.php";
$sql = "SELECT 
    reservas.id AS id_reservas,
    hoteis.id AS id_hoteis,
    hoteis.nome AS nome_hotel, 
    quartos.tipo,
    quartos.preco_diaria,
    reservas.data_entrada,
    reservas.data_saida
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id
JOIN hoteis ON quartos.hotel_id = hoteis.id";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 30px;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th {
            background-color: #2980b9;
            color: white;
            padding: 14px 12px;
            text-align: left;
            font-weight: bold;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #e0e0e0;
            color: #34495e;
        }
        tr:hover {
            background-color: #f8f9fa;
        }
        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h2>Minhas Reservas confirmadas</h2>
    <table>
        <tr>
            <th>Cód. Reserva:</th>
            <th>Quarto:</th>
            <th>Tipo do Quarto:</th>
            <th>Diária:</th>
            <th>Data Entrada (Check-in):</th>
            <th>Data Saída (Check-out):</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <td>".$linha['id_reservas']."</td>
                    <td>".$linha['id_hoteis']."</td>
                    <td>".$linha['tipo']."</td>
                    <td>".$linha['preco_diaria']."</td>
                    <td>".$linha['data_entrada']."</td>
                    <td>".$linha['data_saida']."</td>
                </tr>";
            }
        ?>
    </table>
    <a href="listar_hoteis.php">Clique aqui para novas reservas</a>
</body>
</html>