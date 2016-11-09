<?php



function addMensagem()
    {

     require_once ("control/controle.php");
     $obj = controle::getInstance();
     require_once ("models/Mensagem.php");
     $mensagem = new Mensagem();
     $nome = preg_replace('/[^[:alpha:]_]/', '',$_POST['name']); 
     $assunto = preg_replace('/[^[:alpha:]_]/', '',$_POST['subject']); 
     $mensage = preg_replace('/[^[:alpha:]_]/', '',$_POST['message']); 
     $email = $_POST['email']; 
      
     $mensagem->setNome($nome);
     $mensagem->setAssunto($assunto);
     $mensagem->setEmail($email);
     $mensagem->setMensagem($mensage);
      $resposta = $obj->sendMesagemControle($mensagem);
      return $resposta;
 }
   addMensagem();

?>