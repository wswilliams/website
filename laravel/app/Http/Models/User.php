<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class User extends Model {

    protected $table = 'users';

    public $timestamps = false;

	  private $id;
	  private $nome; 
	  private $email; 
	  private $password; 
	  private $active;

	function getId() {
     return $this->id;
 	}
 	function getNome() {
     return $this->nome;
 	}
 	function getEmail() {
     return $this->email;
 	}
 	function getPassword() {
     return $this->password;
 	}
 	function getActive() {
     return $this->active;
 	}
 	function setId($id) {
     $this->id = $id;
 	}
 	function setNome($nome) {
     $this->nome = $nome;
 	}
 	function setEmail($email) {
     $this->email = $email;
 	}
 	function setPassword($password) {
     $this->password = $password;
 	}
 	function setActive($active) {
     $this->active = $active;
 	}
     function getJson() {
           $user =  array(
              
               'id'       => $this->getId(),
               'nome'     => $this->getNome(),
               'email'    => $this->getEmail(),
               'password' => $this->getPassword(),
               'active'   => $this->getActive()
              
          ); 
     return $user;
     }
     function getJsonEmpty() {
           $user =  array(
               'rest' => false
          ); 
     return $user;
     }
     function isUser() {
           $user =  array(
               'exist' => false
          ); 
     return $user;
     }
}
