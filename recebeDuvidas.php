<?php

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "Banco_Projeto";
// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";


$nomeComentario = $_POST["nomeUsuario"];
$email = $_POST["email"];
$mensagem = $_POST["comentario"];


$sql = "INSERT INTO comentarios (nome, email, comentario)
VALUES ('$nomeComentario', '$email', '$mensagem')";
if ($conecta->query($sql) === TRUE) {
    echo "<script> 
                alert('Dúvida Enviada com Sucesso !!! O mais breve possível iremos responder s2');
                window.location.href = 'link-duvidas.html';
           </script>";
    
} else {
    echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
    echo "<script> 
                alert('Erro no cadastro de usuário: " . $sql . "<br>" . $conecta->error . "<br>');
                window.location.href = 'link-duvidas.html';
           </script>";
}
$conecta->close();