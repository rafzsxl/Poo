<?php
require_once 'Cliente.php';
class ClientePF extends Cliente{
    private string $cpf;

    public function __construct(string $n, string $e, string $c){
        return parent::__construct($n, $e);
        $this->cpf = $cpf;
    }

    public function getDados(){
        return "Nome: {$this->nome} \n E-mail: {$this->email} \n CPF: {$this->cpf}";
    }
}

$cpf = new ClientePF("Rafaeu", "RafaelG@gmail.com", "1342567897.09");
echo $cpf->getDados();
?>