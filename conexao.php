<?php

class mysqli{
    var $dbhost = "localhost";
    var $bancodedados = "malf";
    var $usuario = "root";
    var $senha = "";
}

$mysqli = new mysqli ( $dbhost, $bancodedados, $usuario, $senha );

if ($mysqli -> connect_errno) 
    echo "Falha ao conectar";
else
    echo "Conectado com sucesso!";
