<?php
require_once 'Cliente.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$c1 = new Cliente($_POST['nome'], $_POST['idade']);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <header>
        <nav>
            <a href="c_funcionarios.php">registre um Funcionário</a>
            <a href="c_produtos.php">registre um Produto</a>
        </nav>
    </header>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id=""><br>
        <input type="submit" value="cadastrar">
    </form>
    <?php
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>