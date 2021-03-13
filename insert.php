<?php

    require_once('config.php');

    $email = new Email();
    $emailDestinatario = $email->setEmail($_POST["email"]);
    $nomeDestinatario = $email->setNome($_POST["nome"]);

    $email->cadastro($emailDestinatario,$nomeDestinatario);

?>