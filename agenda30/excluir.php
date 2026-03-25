<html>
   <head>
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
    </head>
    <div class="sim">
<?php

include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id=$id";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>O contato foi excluído com sucesso!</h2>";
    echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
    exit;
} else {
    echo "<h2>Erro ao excluir o contato.</h2> " . mysqli_error($conexao);
    echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
    exit;
}
?>
</div>
</html>