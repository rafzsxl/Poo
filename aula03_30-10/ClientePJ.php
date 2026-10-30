<?php 
require_once 'Cliente.php';
class ClientePJ extends Cliente{
    private string $cnpj;

    
    public function __construct(string $n, string $e, string $c){
        parent::__construct($n, $e);
        $this->cnpj = $c;
    }

    public function getDados(){
        return "Nomes: {$this->nome}\n Email: {$this->email}\nCNPJ: {$this->cnpj}";
    }
}
$cnpj = new ClientePJ("jorge","jorge@gorge", "123123123-123-2");
echo $cnpj->getDados();
?>