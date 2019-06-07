<?php 

    class Usuarios extends Pessoas{
        private $login;
        private $senha;

        function __construct($nome, $idade, $cpf, $login, $senha){
            //pega todas as coisas definidas no método construct da classe pai(PESSOAS)
            parent::__construct($nome, $idade, $cpf);
            $this->login = $login;
            $this->senha = $senha;
        }
        public function getLogin(){
            return $this->login;
        }
        
        public function setLogin($novoLogin){
            $this->login = $novoLogin;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function setSenha($novaSenha){
            $this->senha = $novaSenha;
        }

        public function cadastrarPessoa($con,$novoUsuario){
            try{
                $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf, usuario, senha) VALUES(?,?,?,?,?)");
                $query->execute([
                    $novoUsuario->getNome(),
                    $novoUsuario->getIdade(),
                    $novoUsuario->getCpf(),
                    $novoUsuario->getLogin(),
                    $novoUsuario->getSenha()
                ]);
            
                return $query;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }