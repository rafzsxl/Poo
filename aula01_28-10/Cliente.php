<?php 
class Cliente {
    //atributos:
    public string $nome;
    public int $idade;
    public float $peso;

    public function __construct(string $nome, int $idade, float $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!<br>";
    }

    public function mostrarDados(){
        echo "Dados do cliente: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Peso: " . $this->peso . "<br>";
    }
}

// Insere um Novo Cliente
$c1 = new Cliente("Rafael", 16, 67);
// Demonstra a Função
$c1->mostrarDados();

$c2 = new Cliente("gazola", 16, 41);
$c2->mostrarDados();

// Sem método da function __construct
// $c2 = new Cliente();
// $c2->nome = "gazola";
// $c2->idade = 16;
// $c2->peso = 41;
// $c2->mostrarDados();

?>