<?php
    $serv = "localhost";
    $user = "root";
    $senha = "";
    $banco = "hotel";

    $conn = new mysqli($serv,$user,$senha,$banco);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    

?>