<?php 
// Criando a Classe Funcionarios
class Funcionario {
    //atributos com seus tipos de variável e tipos de demonstração
    public string $nome;
    public int $idade;
    public float $salario;

    // Para inicializar os atributos do objeto de uma só vez quando você utilizasse a palavra NEW
    public function __construct(string $nome, int $idade, float $salario){
        // Referenciando o objeto atual que está sendo executado com $this->atributo = $atrivuto
        $this->nome = $nome;
        $this->idade = $idade;
        $this->salario = $salario;
        $this->cadastrar();
    }

    // Demonstra se foi feito o cadastro
    public function cadastrar(){
        echo "Funcionário {$this->nome} cadastrado com sucesso!<br>";
    }

    // Demonstra os Dados do Funcionario cadastrado
    public function mostrarDados(){
        echo "Dados dos Funcionários: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Salario: " . $this->salario . "<br>";
        echo "hr";
    }
}

?>