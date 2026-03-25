<html>
    <div class="sim">
<?php
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone)
            VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Contato foi adicionado com sucesso!</h2>";
    echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
} else {
    echo "<h2>Erro ao adicionar o contato.</h2" . mysqli_error($conexao);
    echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
}
?>
    </div>
    <style>
        .sim{
            height: fit-content;
            min-height: 500px;
            width: fit-content;
            background-color: lightblue;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-color: #0a2735ff;
            border-width: 5px;
            border-radius: 10px;
            border-style: solid;
        }
        body{
            background-color: #3f378bff;
        }
    </style>
</html>