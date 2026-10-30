<?php
// Classe Produto
class Produto {
    // Atributos privados
    private string $nome;
    private float $preco;

    // Construtor com nome e preço (e validação integrada no preço)
    public function __construct(string $nome, float $preco = 0.0) {
        $this->nome = $nome;
        $this->setPreco($preco); // Garante que passa pela validação do setter
    }

    // Métodos Acessores (Getter e Setter) para o Nome:
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    // Métodos Acessores (Getter e Setter) para o Preço (Com Validação de Segurança)
    public function getPreco(): float {
        return $this->preco;
    }
    
    public function setPreco(float $preco): void {
        if ($preco < 0) {
            echo "Erro: O preço não pode ser negativo! Atribuindo 0.0 por segurança.\n";
            $this->preco = 0.0;
        } else {
            $this->preco = $preco;
        }
    }

    // Método para exibir todos os dados
    public function getAll(): void {
        echo "--- Dados do Produto ---" . "\n";
        echo "Nome: {$this->nome}\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

// 1. Testando a criação de produtos e a validação de preço negativo
$p1 = new Produto("Notebook", 3500.00);
$p1->getAll();

echo "\n";

// 2. Testando com preço inválido (negativo)
$p2 = new Produto("Smartphone", -1500.00);
$p2->getAll();
?>