<?php
class Evento{
		private $id; 
		private $nome; 
		private $descricao; 
		private $link; 
		private $data;
		private $status;
 		private static $instance;
    	
        public function __construct()
			{

		try{

                    $this->getNome(); 
                    $this->getDescricao(); 
                    $this->getLink();
                    $this->getStatus(); 
                    $this->getData(); 
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
                function getLink() {
                   return $this->link;
                }
                function getStatus() {
                   return $this->status;
                }
                function getData() {
                   return $this->data;
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

                 public function setLink($link) {
                     $this->link = $link;
                 }

                 public function setStatus($status) {
                     $this->status = $status;
                 }
                function setData($data) {
                   $this->data = $data;
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
