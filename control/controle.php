<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controle
 *
 * @author williams
 */
class controle {
    //put your code here
    private static $instance;
    
    /*metodo projeto sington
      */
    public static function getInstance(){
      try{
	 if (! self:: $instance){
	      self:: $instance = new controle();
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
     function sendMesagemControle(Mensagem $mensagem){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      
      return $objDao->sendMesagemDao($mensagem);
      
     }
     /*fim
      */

     
     /*metodo para cadastrar um membro que recebe como parametro um objeto membro
      * e retorna um 
      */
     public function cadadastrarMembroControle(objetoMembro $obj){
      require_once ("control/dao.php");
      $objDao = dao::getInstance();
      
      return $objDao->cadadastrarMembroDao($obj);
     }
     /*fim
      */
     
     
     /*metodo para listar todas os eventos e retornar um lista
      */
     function listaEventosControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      
      return $objDao->listaEventosDao();
      
     }
     /*fim
      */

     /*metodo para listar todas mesagens e retornar um lista
      */
     function listaMensagensReflexaoControle(){
      require_once ("control/dao.php");
      
      $objDao = dao::getInstance();
      
      return $objDao->listaMensagensReflexaoDao();
      
     }
     /*fim
      */
}
