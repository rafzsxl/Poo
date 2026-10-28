<?php 
class Produto {
    //atributos:
    public string $nome;
    public int $preco;
    public string $tamanho;

    public function __construct(string $nome, int $preco, string $tamanho){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->tamanho = $tamanho;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!<br>";
    }

    public function mostrarDados(){
        echo "Dados do cliente: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: " . $this->preco . "<br>";
        echo "tamanho: " . $this->tamanho . "<br>";
            }
}

?>