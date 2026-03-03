<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
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
        if($senha == "pao de queijo" and $nome == "Tony") {
            echo"Boas vindas administrador $nome";
        } else{
            echo"ERRO nome ou senha incorretos <br> Chamando a polícia!";
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
    font-family: sans-serif;
}
body{
    background-color: lightblue;
}
</style>
</html>