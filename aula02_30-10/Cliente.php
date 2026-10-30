<?php
//  Classe
class Cliente{
    // Atributos
    private $nome;
    private $email;
    private $cpf;

    // Métodos:
    public function __construct($n, $c){
        $this->nome = $n;
        $this->cpf = $c;
}
    // Métodos Acessores (Getter e Setter) para Nome:
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    // Métodos Acessores (Getter e Setter) para Email:
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    // Métodos Acessores (Getter e Setter) para Cpf:
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($c){
        $this->cpf = $c;
    }

    public function getAll(){
        // echo, pois o return só aceita um por vez.
        echo "Dados Recebidos:" ."\n";
        echo  "Nome :{$this->nome}" . "\n";
        echo  "E-mail: {$this->email}" . "\n";
        echo  "Cpf: {$this->cpf}" . "\n";
    }
}

$c1 = new Cliente("Rafaeu", "123.456.789.10");
$c1-> setEmail("rafaelg@gmail.com");
$c1->getAll()


?>