<?php

require_once 'conexao.php';

$nome = $_POST['nome_hotel'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO hoteis (nome, cidade, estrelas, email, senha)
VALUES ('$nome', '$cidade', '$estrelas', '$email', '$senha_hash')";

if(mysqli_query($conexao, $sql)){
    echo "<br>Cadastro realizado com sucesso!";
    echo "<br><br>";
}else {
    echo "<br>ERROR";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="index.html">
  <button>Voltar</button>
</a>
    
</body>
</html>