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

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO Usuario (email, senha)
VALUES ('$email', '$senha')";
if ($conecta->query($sql) === TRUE) {
   echo "<script> 
                alert('Usuário cadastrado com sucesso');
                window.location.href = 'index_Login.html';
           </script>";
    
} else {
    echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
    echo "<script> 
                alert('Erro no cadastro de usuário: " . $sql . "<br>" . $conecta->error . "<br>');
                window.location.href = 'index_Cadastro.html';
           </script>";
}
$conecta->close();
?>
 