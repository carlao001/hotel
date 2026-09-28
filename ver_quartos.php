<?php
require_once 'conexao.php';
$id_hotel = $_GET['id_hotel'];
$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel'
and disponivel = 1";
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
            max-width: 900px;
            margin: 0 auto;
        }

        h2 {
            color: #2c539e;
            margin: 30px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #2c539e;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background-color: #ffffff;
            margin-bottom: 20px;
        }

        table tr:first-child td {
            background-color: #2c539e;
            color: #ffffff;
            font-weight: bold;
            padding: 15px 20px;
        }

        table td {
            padding: 14px 20px;
            color: #333333;
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.2s ease;
        }

        table tr:hover td {
            background-color: #f5f7fa;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        label {
            display: inline-block;
            font-weight: bold;
            color: #333333;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            margin-bottom: 10px;
        }

        input:focus {
            outline: none;
            border-color: #2c539e;
            box-shadow: 0 0 0 2px rgba(44, 83, 158, 0.2);
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <h2>Quartos Disponíveis no Hotel Selecionado</h2>
    <table>
        <tr>
            <td>Número</td>
            <td>Tipo</td>
            <td>Preço</td>
        </tr>
    <?php while($quarto = mysqli_fetch_assoc($resultado)){
        echo "<tr>
            <td>".$quarto['numero']."</td>
            <td>".$quarto['tipo']."</td>
            <td>".$quarto['preco_diaria']."</td>
        </tr>";
    }
    ?>
    </table>
    <h2>Preencha para reservar o quarto</h2>
    <form action="salvar_reserva.php" method="post">
        <label for="id_cliente">ID do Cliente:</label>
        <input type="number" name="id_cliente" id="id_cliente">
        <br><br>
        <label for="id_quarto">ID do Quarto:</label>
        <input type="number" name="id_quarto" id="id_quarto">
        <br><br>
        <label for="data_entrada">Data Entrada:</label>
        <input type="date" name="data_entrada" id="data_entrada">
        <br><br>
        <label for="data_saida">Data Saída:</label>
        <input type="date" name="data_saida" id="data_saida">
        <button>RESERVAR</button>
    </form>
</body>
</html>