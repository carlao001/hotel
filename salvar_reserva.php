<?php
require_once 'conexao.php';

$id_cliente   = $_POST['id_cliente'];
$id_quarto    = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida   = $_POST['data_saida'];

if (empty($id_cliente) || empty($id_quarto) || empty($data_entrada) || empty($data_saida)) {
    header("Location: ver_quartos.php");
    exit;
}

$sql = "INSERT INTO reservas (id_cliente, id_quarto, data_entrada, data_saida)
VALUES ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <title>Reserva Confirmada</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
            .sucesso { color: green; font-size: 18px; margin-bottom: 20px; }
            a { color: #0066cc; text-decoration: none; font-weight: bold; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class='sucesso'>✅ Reserva realizada com sucesso!</div>
        <p><a href='ver_minhas_reservas.php'>Ver Minhas Reservas</a></p>
    </body>
    </html>";
} else {
    header("Location: ver_quartos.php");
    exit;
}

mysqli_close($conexao);
?>