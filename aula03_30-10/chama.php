<?php
require_once 'ClientePF.php';
require_once 'ClientePJ.php';

$c[0] = new ClientePF("Cliente Físico", "teste@fisico.com", "123.123.123-00");
$c[1] = new ClientePJ("Cliente Jurídico", "teste@juridico.com", "123-123-123/0001-12");

foreach($c as $clientes){
    echo $clientes->getDados();
}
?>