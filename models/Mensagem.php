<?php
class Mensagem{
		private $id; 
		private $nome; 
		private $email; 
		private $assunto; 
		private $mensagem;
    	
        public function __construct()
			{

		try{

                    $this->getNome(); 
                    $this->getEmail(); 
                    $this->getAssunto();
                    $this->getMensagem(); 
                    
                  }catch (Exception $e) {
                    echo($e->getMessage());
		  }
              }

                function getId() {
                   return $this->id;
                }
                function getNome() {
                   return $this->nome;
                }
				function getEmail() {
                   return $this->email;
                }
                function getAssunto() {
                   return $this->assunto;
                }
                function getMensagem() {
                   return $this->mensagem;
                }
                
                function setId($id) {
                   $this->id = $id;
                }

                 public function setNome($nome) {
                     $this->nome = mb_strtoupper($nome);
                 }

                 public function setEmail($email) {
                     $this->email = $email;
                 }

                 public function setAssunto($assunto) {
                     $this->assunto = $assunto;
                 }

                 public function setMensagem($mensagem) {
                     $this->mensagem = $mensagem;
                 }
                
                public function __toString()
                {
                    return  $this->nome;
                    /*$this->matricula." ".$this->nome." ". 
                            $this->sexo." ".$this->data." ".$this->rg." ".$this->cpf." ".$this->estadocivil." ".
                            $this->natural." ".$this->profissao." ".$this->escola." ".$this->pai." ".$this->mae." ".$this->necessidade." ".
                            $this->fone." ".$this->filho." ".$this->formacao." ".$this->membrasia." ".$this->funcao." ".$this->participou." ".
                            $this->trabalhando." ".$this->viajando." ".$this->congrega." ".$this->rua." ".$this->bairro." ".$this->casa." ".$this->status;*/
                }
                
	};
?>
