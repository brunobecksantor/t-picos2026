<html>

<head>
    <title>Agenda de contatos - T30</title>
    <style>
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="sim">
    <h1>Agenda - Turma 30 - 2026</h1>
    <h2 style="display: block; text-align: center;">Cadastrar contato</h2>
    <form action="salvar.php" method="POST" style="font-family: sans-serif; font-size: 18px;">
        Nome: <input type="text" name="nome"> <br><br>
        Endereço: <input type="text" name="endereco"> <br><br>
        Telefone: <input type="text" name="fone"><br><br>
        <input type="submit" value="Cadastrar" style="display: block; margin: 0 auto; text-align: center; background-color: #2c98caff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; border: none; cursor: pointer;">
    </form>

    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<div style='word-wrap: break-word; overflow-wrap: break-word; word-break: break-word;'>" . $linha['nome'] . " | " . $linha['endereco'] .
                " | " . $linha['telefone'] . " | <a href='editar.php?id=" . $linha['id'] . "'  style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block;'>
                Editar</a> | <a href='excluir.php?id=" . $linha['id'] . "'
                onclick='return confirm(\"Você quer realmente excluir o contato?\");'
                style='background-color: #ff6b6b; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block;'>Excluir</a>" . "<br><br><br></div>";
        }
    } else {
        echo "<h3 style='background-color: #2c98caff; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: block; text-align: center; margin-top: 25px;'>Nenhum contato registrado.</h3>";
    }

    ?>
    </div>
</body>
<style>
    .sim{
        height: fit-content;
        min-height: 450px;
        width: fit-content;
        max-width: 360px;
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