<?php 

    $mysql = new mysqli('mysql', 'root', 'tiger', 'blog');
    $mysql->set_charset('utf8');

    
    if($mysql == False) {
        echo "Erro na conexão";
    }
?>