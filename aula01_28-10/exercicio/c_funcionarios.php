<?php
require_once 'Funcionarios.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // Passando os atributos obtidos pelo Post para o cadastro do Usuário
$c1 = new Funcionario($_POST['nome'], $_POST['idade'], $_POST['salario']);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionarios</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">registre um Funcionário</a>
            <a href="c_produtos.php">registre um Produto</a>
        </nav>
    </header>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id=""><br>
        <label for="salario">Salário: </label>
        <input type="number" name="salario" id="" steps=0.55><br>
        <input type="submit" value="cadastrar">
    </form>
    <?php
    // Demonstra os dados recebidos
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>