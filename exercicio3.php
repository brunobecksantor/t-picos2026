<?php
$nota = $_POST["nota"];
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
        if($nota < 1.7) {
            echo"sem exame";
        } elseif ($nota >=7) {
            echo"passou";
        } else{
            $nota = (50-(6*$nota))/4;
            echo"você precisa tirar $nota";
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
    border-color: black;
    border-width: .1cm;
    border-style: solid;
    border-radius: 5%;
    font-size:25px;
    text-align:center;
    font-family: sans-serif;
}
body {
    background-color: lightblue;
}
</style>
</html>