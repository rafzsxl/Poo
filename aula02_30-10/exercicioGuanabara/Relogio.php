<?php
// Classe
class Relogio{
    // Atributos
    private string $nome;
    private string $horas;
    private float $preco;
    private string $cronometro;
    private string $estado;

    // Utilizando o __construct para simplificar a passagem dos atributos
    public function __construct($h, $c, $e, $p = 0.0){
        $this->horas = $h;
        $this->cronometro = $c;
        $this->estado = $e;
        $this->preco = $p; // Inicializado para evitar erros caso venha inválido
    }

    // Métodos Acessores (Getter e Setter) para o Nome:
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    // Métodos Acessores (Getter e Setter) para as Horas:
    public function getHoras(){
        return $this->horas;
    }
    public function setHoras($h){
        $this->horas = $h;
    }

    // Métodos Acessores (Getter e Setter) para o Preço (Com Validação de Segurança)
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        if ($p < 0) {
            echo "Erro: O preço não pode ser negativo! Atribuindo 0.0 por segurança.\n";
            $this->preco = 0.0;
        } else {
            $this->preco = $p;
        }
    }

    // Métodos Acessores (Getter e Setter) para o Cronometro
    public function getCronometro(){
        return $this->cronometro;
    }
    public function setCronometro($c){
        $this->cronometro = $c;
    }

    // Métodos Acessores (Getter e Setter) para o Estado
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($e){
        $this->estado = $e;
    }

    // Métodos Funcionais (Comportamentos baseados no estado)
    public function verHoras(){
        if ($this->estado == "Ruim" || $this->estado == "Quebrado") {
            echo "O relógio está {$this->estado}, o visor está falhando e não dá para ver as horas.\n";
        } else {
            echo "Horas atuais no visor: {$this->horas}\n";
        }
    }

    public function trocarPilha(){
        $this->estado = "Bom";
        echo "Pilha trocada com sucesso! O relógio agora está funcionando perfeitamente.\n";
    }

    // Método para exibir todos os dados
    public function getAll(){
        echo "--- Dados Recebidos ---" . "\n";
        echo "Nome: {$this->nome}\n";
        echo "Preço: R$ {$this->preco}\n";
        echo "Horas: {$this->horas}\n";
        echo "Cronômetro: {$this->cronometro}\n";
        echo "Estado: {$this->estado}\n";
    }
}

// 1. Testando com o Construtor e a validação de preço negativo (-21.99)
$c1 = new Relogio("12:00", "10s", "Bom");
$c1->setNome("Relogio Vei Podi");
$c1->setPreco(-21.99); // Vai disparar a regra de segurança
$c1->getAll();


/*
// EXEMPLO SEM __construct (Caso queira testar depois)
$r1 = new Relogio("00:00", "0s", "Novo"); // ou ajuste conforme sua preferência
$r1->setNome("Relogio Moderno");
$r1->setPreco(1200.01);
$r1->setHoras("12:00");
$r1->setCronometro("10s");
$r1->setEstado("OK");
$r1->getAll();
*/
?>