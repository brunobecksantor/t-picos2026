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
        <h1 style="margin-top: -10px; display: block; text-align: center;">Editar Contato</h1>
    <?php
include('conexao.php');

$id = $_GET['id'];


$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);


if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado na base.";
    exit;
}

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET nome = '$novo_nome', 
                endereco = '$novo_endereco', telefone = '$novo_fone' 
                WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "<h2>Contato atualizado com sucesso!</h2>";
        echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
        exit;
    } else {
        echo "<h2>Erro ao atualizar. </h2>" . mysqli_error($conexao);
        echo "<a href='index.php' style='background-color: #2c98caff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px auto; text-align: center; display: block;'>VOLTAR</a>";
        exit;
    }
}


?>

<form method="post">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
    Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone']; ?>"><br><br>

    <input type="submit" name="atualizar" value="Atualizar">
</form>
</div>
</html>