<?php
require_once 'conexao.php';

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria, disponivel)
VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco_diaria', 1)";

if(mysqli_query($conexao, $sql)) {
    
} else {
    
}
?>

<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <title>Hotel cadastrado</title>
</head>

<body style='
    text-align: center;
    margin: 0;
    padding: 20px;
    background: linear-gradient(135deg, #1e1b4b, #312e81, #1e40af);
'>

    <h1 style='
        background: linear-gradient(90deg, #7c3aed, #2563eb);
        border-radius: 15px;
        display: inline-block;
        padding: 12px 24px;
        border: 2px solid #22d3ee;
        box-shadow: 0px 6px 20px rgba(34, 211, 238, 0.4);
        color: #ffffff;
    '>
        Hotel cadastrado! 🏨
    </h1>

    <div style='
        border: 3px solid #22d3ee;
        background: linear-gradient(145deg, #eef2ff, #ddd6fe);
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        border-radius: 20px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.35);
        color: #1e1b4b;
    '>

        <h2 style='
            background: linear-gradient(90deg, #4c1d95, #1d4ed8);
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #a78bfa;
            color: #67e8f9;
        '>
            DADOS DE CADASTRO
        </h2>

        <p><b>Id do Hotel:</b> <?php
        
        echo $id_hotel

        ?></p>

        <p><b>Número:</b> <?php
        
        echo $numero_quarto

        ?></p>

        <p><b>Tipo:</b>  <?php
        
        echo $tipo_quarto

        ?></p>

 <p><b>Preço:</b> <?php
        
        echo $preco_diaria

        ?></p>
 
</body>
</html>