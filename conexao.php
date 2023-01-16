<?php
$servidor = "localhost";
$usuario = "postgres";
$senha = "postgres";
$dbname = "formulario";


//Criar a conexão

$conn = pg_connect($servidor, $usuario) or die ("Não foi possível conectar ao servidor PostGreSQL");
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
echo "Conexão efetuada com sucesso!!";
?>