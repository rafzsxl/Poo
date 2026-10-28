<?php 
class Funcionarios {
    //atributos:
    public string $nome;
    public int $idade;
    public float $peso;
    public int $salario;

    public function __construct(string $nome, int $idade, float $peso, int $salario){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->salario = $salario;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!<br>";
    }

    public function mostrarDados(){
        echo "Dados dos Funcionários: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Salario: " . $this->salario . "<br>";
        echo "hr";
    }
}

?>