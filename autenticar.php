<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    //validar os campos
    if (empty($email) || empty($senha)) {
        header('location: login.php');
        exit;
    }
    //buscar usuario no banco de dados
    $sql = "SELECT * FROM usuario WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $USUARIO['id_usuario'];
        $_SESSION['usuario_nome'] = $USUARIO['nome'];
        $_SESSION['usuario_email'] = $USUARIO['email'];

        header('location: index.php');
        exit;
    } else {
        header('location: login.php');
        exit;
    }
} else {
    header('location: login.php');
    exit;
}
