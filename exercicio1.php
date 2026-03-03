<?php
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <?php 
        if($idade < 18) {
            echo"seu nome é $nome você é Menor de idade";
        } else{
            echo"Seu nome é $nome você mora no endereço $endereco, você tem $idade anos e você é do genêro $sexo";
        }
        ?>
    </div>
</body>
<style>
.form{
    background-color: cadetblue;
    height: 7cm;
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    justify-self: center;
    margin-top: 10%;
    border-color: black;
    border-width: .1cm;
    border-style: solid;
    border-radius: 5%;
    font-size:25px;
    text-align:center;
}
</style>
</html>