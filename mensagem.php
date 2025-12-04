<?php
//funçao que define uma mensagem
function set_mensagem($mensagem, $tipo){
    $_SESSION['mensagem'] = $mensagem;
    $_SESSION['mensagem_tipo'] = $tipo;
}

function exibir_mensagem(){
    if (isset($_SESSION['mensagem'])){
        $mensagem = $_SESSION ['mensagem'];
        $tipo = $_SESSION['mensagem_tipo'];
        echo '<div class="mensage mensagem' .$tipo. '" >';
        echo '<p>' .$mensagem. '</p>';
        echo '<div>';
    }

    unset($_SESSION['mensagem']);
    unset($_SESSION['mensagem_tipo']);
}
?>