<html>

    <head>

        <title>Agenda de contatos - T30</title>

    </head>

    <body>

        <h1>Agenta - Turma 30 - 2026</h1>
        <h2>Cadastrar contatos</h2>
        <form action="salvar.php" method="post">
            Nome: <input type="text" name="nome"> <br><br>
            Endereço: <input type="text" name="endereco"> <br><br>
            Telefone: <input type="text" name="telefone"> <br><br>
            <input type="submit" value="Cadastrar">
        </form>

    <?php 
    include ('conexao.php');
    
    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0){
        while ($linha = mysqli_fetch_assoc($resultado)){
            echo $linha['nome']  ." | ". $linha['endereco'] ." | ". $linha['telefone'] . " | <a href='editar.php?id=".$linha['id']."'>Editar</a> | <a href='excluir.php?id='>Excluir</a>" . "<br>";
        }
    } else{
        echo"<h3>Nenhum contato registrado.</h3>";
    }
    
    ?>

    </body>

</html>