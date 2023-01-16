<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf=8">
        <title> Contato </title>

    </head>
    <body>
        <form method="post" action="salva_mensagem.php">
            Nome: <input type="text" name="nome" placeholder="Nome Completo" required> </br>
            Email: <input type="email" name="email" placeholder="Seu Email" required> </br>
            Assunto: <input type="text" name="assunto" placeholder="Assunto do contato" required> </br>
            Mensagem: <textarea name="mensagem"></textarea>
            <input type="submit" value="Enviar">
        </body>
</html>  
