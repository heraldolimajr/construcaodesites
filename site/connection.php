<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "aulaphp";

    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password);

    if($conn){
        echo "<h1>Conectado com sucesso!</h1>";
    }else{
        echo "<h1>A conexão falhou!</h1>";
    }
?>