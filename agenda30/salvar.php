<?php 
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contatos (nome, endereco,telefone)
            VALUES ('$nome', '$endereco', '$telefone')";

if(mysqli_query($conexao,$sql)){
    echo"<h2>O contato foi adicionado com sucesso.</h2>";
    echo"<a href='index.php'>VOLTAR</a>";
}else{
    echo"<h2>Eroo ao adicionar o contato.</h2>" . mysqli_error($conexao);
}


?>