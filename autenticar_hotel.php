<?php
require_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM hoteis WHERE email = '$email' AND senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    header("Location: cadastrar_quarto.php");
    exit();
}else{
    echo "Seu e-mail e senha não existem";
    echo "<a href='login_hotel.html'>Clique aqui para tentar novamente</a>";
}
?>