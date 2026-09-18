<?php
require_once 'conexao.php';

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria)
VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco_diaria')";

$resultado = mysqli_query($conexao, $sql);

if(!$resultado) {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
    exit;
}
?>