<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dao
 *
 * @author williams
 */
class dao {
    //put your code here
    private static $instance;

    /*metodo projeto sington
      */
    public static function getInstance(){
      try{
	 if (! self:: $instance){
	      self:: $instance = new dao();
	   }
	     return self:: $instance;
        }catch (Exception $e) {
              echo($e->getMessage());
	}
     }
     /*fim
      */
     
     
     /*metodo para cadastrar uma mensagem
      */
     public function sendMesagemDao(Mensagem $mensagem){
      
        require_once ("conexao.php");
    
        $obj = Conectar::getInstance();
        $ret=0;
        $nome=$mensagem->getNome();
        $email=$mensagem->getEmail();
        $assunto=$mensagem->getAssunto();
        $mensage=$mensagem->getMensagem();

        $inse = "INSERT INTO mensagem (id,nome,email,assunto,mensagem)VALUES('','$nome','$email','$assunto','$mensage')";

        $result = mysqli_query($obj->getLink(),$inse) or die ("Falha na insercao da mensagem".mysqli_error());
        $ret = 1;
                        
        $obj->freebanco();
      
      return $ret;
     }
     /*fim
      */
     
     /*metodo para listas todos os eventos em destaque retornar um lista
      */
     function listaEventosDao(){
      require_once ("conexao.php");
      require_once ("models/Evento.php");
      
      $objDao = Conectar::getInstance();
      $query="Select * from eventos where status = 1";
      // $resultado = mysqli_query($objDao->getLink(),) or die ("Nao foi possivel realizar a busca".mysqli_connect_errno());
      $listaEvento = array();

      if ($resultado = mysqli_query($objDao->getLink(), $query) or die ("Nao foi possivel realizar a busca".mysqli_connect_errno())) {
        $i=0;
        $achou=FALSE;
        /* fetch associative array */
          while ($row = mysqli_fetch_assoc($resultado)) {
                
            $evento = new Evento();
            $evento->setId($row['id']);                  
            $evento->setNome($row['nome']);
            $evento->setData($row['data']);
            $evento->setDescricao($row['descricao']); 
            $evento->setLink($row['link']); 
            $evento->setStatus($row['status']);
                        
             $listaEvento[$i] = $evento;
         
              $i++;
              $achou = true;
          }

          /* free result set */
          if($achou){
            mysqli_free_result($resultado);
          }
      }
      
        // $objDao->freebanco(); 

   return $listaEvento;
  }
     /*fim
      */

     /*metodo para listas todos as mesagens de reflexao retornar um lista
      */
     function listaMensagensReflexaoDao(){
      require_once ("conexao.php");
      require_once ("models/Reflexao.php");
      
      $objDao = Conectar::getInstance();
      $query="Select * from testemunho where status = 1";
      $listaTestemunho = array();

      if ($resultado = mysqli_query($objDao->getLink(), $query)) {
        $i=0;
        $achou=FALSE;
        /* fetch associative array */
          while ($row = mysqli_fetch_assoc($resultado)) {
                
            $reflexao = new Reflexao();
            $reflexao->setId($row['id']);                  
            $reflexao->setNome($row['nome']);
            $reflexao->setDescricao($row['descricao']);
            $reflexao->setImagem($row['imagem']);
            $reflexao->setFuncao($row['funcao']); 
            $reflexao->setStatus($row['status']);
                        
             $listaTestemunho[$i] = $reflexao;
         
              $i++;
              $achou = true;
          }

          /* free result set */
          if($achou){
            mysqli_free_result($resultado);
          }
      }
      
        // $objDao->freebanco();


   return $listaTestemunho;
  }
     /*fim
      */
}
