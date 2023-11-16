<?php
    $dbHost = 'Localhost';
    $dbusername = 'root';
    $dbPassword = '';
    $dbName = 'Roda_presa';

    $conexao = new mysqli( $dbHost, $dbusername, $dbPassword,$dbName);
    if($conexao->connect_errno){
        echo "ERRO";
    }
?>