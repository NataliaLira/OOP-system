<?php 

class Pessoas{
    private $nome;
    private $idade; 
    private $cpf;

    function __construct($nome, $idade, $cpf){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getIdade(){
        return $this->idade;
    }
    
    public function setIdade($novaIdade){
        $this->nome = $novaIdade;
    }

    public function getCpf(){
        return  $this->cpf;
    } 

    public function cadastrarPessoas($con, $pessoa){
        try{
            $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf) VALUES (?,?,?)");
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCpf()
            ]);
            //quando a query é executada ela retorna um booleano dizendo se sim ou não, colocando no return posso saber se dá certo
            return $query;
        } catch(PDOExeption $e) {
            echo $e->getMessage();
            return false;
        }
    }
}