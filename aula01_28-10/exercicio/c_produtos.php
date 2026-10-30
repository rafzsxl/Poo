<?php
require_once 'Produtos.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$c1 = new Produto($_POST['nome'], $_POST['preco'], $_POST['tamanho']);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
</head>
<body>
    <header>
        <nav>
            <a href="c_clientes.php">registre um Cliente</a>
            <a href="index.php">registre um Funcionário</a>
        </nav>
    </header>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="preco">Preço: </label>
        <input type="number" name="preco" id=""><br>
        <label for="tamanho">Tamanho: </label>
        <input type="text" name="tamanho" id=""><br>
        <input type="submit" value="cadastrar">
    </form>
    <?php
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>