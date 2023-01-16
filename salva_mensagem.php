<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, assunto, mensagem) VALUES ('$nome', '$email','$assunto', '$mensagem'  ";
$result_msg_contato = postgre_query($conn, $msg_contato)
?>