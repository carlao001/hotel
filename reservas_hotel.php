<?php
require_once "conexao.php";

$id_hotel = 1;

$sql = "SELECT 
        reservas.id,
        clientes.nome AS nome_cliente,
        clientes.telefone,
        quartos.numero AS numero_quarto,
        reservas.data_entrada,
        reservas.data_saida
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id
JOIN clientes ON reservas.clientes_id = clientes.id
WHERE quartos.hotel_id = '$id_hotel'";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Recebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }
        a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Reservas Recebidas pelo Hotel</h2>

    <table>
        <tr>
            <th>ID Reserva</th>
            <th>Nome do Cliente</th>
            <th>Telefone</th>
            <th>Número do Quarto</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>
        <?php
        if (mysqli_num_rows($resultado) > 0) {
            while ($reserva = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $reserva['id'] . "</td>";
                echo "<td>" . $reserva['nome_cliente'] . "</td>";
                echo "<td>" . $reserva['telefone'] . "</td>";
                echo "<td>" . $reserva['numero_quarto'] . "</td>";
                echo "<td>" . $reserva['data_entrada'] . "</td>";
                echo "<td>" . $reserva['data_saida'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td style='text-align:center; padding:20px;'>Nenhuma reserva encontrada.</td></tr>";
        }
        ?>
    </table>

    <div class="links">
        <a href="cadastrar_quarto.html">Cadastrar Novo Quarto</a>
        <a href="logout_hotel.php">Sair</a>
    </div>

</body>
</html>