<?php
class Reflexao{
		private $id; 
		private $nome; 
		private $descricao; 
		private $imagem; 
		private $funcao;
		private $status;
 		private static $instance;
    	
        public function __construct()
			{

		try{

                    $this->getNome(); 
                    $this->getDescricao(); 
                    $this->getImagem();
                    $this->getStatus(); 
                    $this->getFuncao(); 
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
				function getDescricao() {
                   return $this->descricao;
                }
                function getImagem() {
                   return $this->imagem;
                }
                function getStatus() {
                   return $this->status;
                }
                function getFuncao() {
                   return $this->funcao;
                }
                function setId($id) {
                   $this->id = $id;
                }

                 public function setNome($nome) {
                     $this->nome = mb_strtoupper($nome);
                 }

                 public function setDescricao($descricao) {
                     $this->descricao = $descricao;
                 }

                 public function setImagem($imagem) {
                     $this->imagem = $imagem;
                 }

                 public function setStatus($status) {
                     $this->status = $status;
                 }
                function setFuncao($funcao) {
                   $this->funcao = $funcao;
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
