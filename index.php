<?php
require_once 'config.php';
//verificar se o usúario está logado
if (!isset($_SESSION['usuario_id'])){
    header('Location: login.php');
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financeiro</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <h3>Sistema Financeiro</h3>
    <ul>
        <li>aaaa</li>
        <li>aaaa</li>
        <li>aaaa</li>
        <li>aaaa</li>
    </ul>
<!-- Div da tela -->
    <div class="center">
        <h1>Sistema Financeiro</h1>
    </div>
    <div>
        <p>Bem-Vindo. <strong> <?php echo $usuario_nome ?> </strong></p>
    </div>
</div>
</body>
</html>