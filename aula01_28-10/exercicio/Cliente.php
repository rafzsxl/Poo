<?php 
class Cliente {
    //atributos:
    public string $nome;
    public int $idade;

    // cadastrando os  utilizando o NEW
    public function __construct(string $nome, int $idade){
        // Referenciando objeto orientado com $this
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!<br>";
    }

    public function mostrarDados(){
        echo "Dados do cliente: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
            }
}

?>