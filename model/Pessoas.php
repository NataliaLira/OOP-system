<?php 

class Pessoas{
    private $nome;
    private $idade; 
    private $cpf;

    public function getNome(){
        return $nome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getIdade(){
        return $idade;
    }
    
    public function setIdade($novaIdade){
        $this->nome = $novaIdade;
    }

    public function getCpf(){
        return $cpf;
    } 

    public function sertCpf($numeroCpf){
        $this->cpf = $cpf;
    }

    
}