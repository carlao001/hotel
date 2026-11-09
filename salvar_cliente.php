<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes (nome, email, telefone, senha) 
VALUES ('$nome', '$email', '$telefone', '$senha_hash')";

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