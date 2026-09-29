<?php
require_once 'conexao.php';
$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];
$sql = "INSERT INTO reservas (clientes_id, quarto_id, data_entrada, data_saida, total)
VALUES ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida', 100)";
if(mysqli_query($conexao, $sql)){
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva - Sucesso</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            text-align: center;
            max-width: 450px;
            width: 100%;
        }
        .sucesso {
            color: #2e7d32;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .icone {
            font-size: 3rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icone">✅</div>
        <div class="sucesso">Reserva salva com sucesso!</div>
    </div>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva - Erro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #ffebee 0%, #ffcdd2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            text-align: center;
            max-width: 450px;
            width: 100%;
        }
        .erro {
            color: #c62828;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 25px;
        }
        .icone {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        a {
            display: inline-block;
            background: #d32f2f;
            color: #fff;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        a:hover {
            background: #b71c1c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icone">❌</div>
        <div class="erro">Não foi possível salvar sua reserva.</div>
        <a href='ver_quartos.php'>Tente novamente</a>
    </div>
</body>
</html>
<?php
}
?>