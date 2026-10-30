<?php 
// Classe Produtos
class Produto {
    //atributos:
    public string $nome;
    public int $preco;
    public string $tamanho;

    // cadastrando os Objetos utilizando o NEW
    public function __construct(string $nome, int $preco, string $tamanho){
        // Referenciando objeto orientado com $this
        $this->nome = $nome;
        $this->preco = $preco;
        $this->tamanho = $tamanho;
        $this->cadastrar();
    }

    // Exibe caso o produto tenha sido cadastrado
    public function cadastrar(){
        echo "Produto {$this->nome} cadastrado com sucesso!<br>";
    }

    // Demonstra os Dados
    public function mostrarDados(){
        echo "Dados do cliente: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: " . $this->preco . "<br>";
        echo "tamanho: " . $this->tamanho . "<br>";
            }
}

?>