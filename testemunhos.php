<?php

function findAllTestemunhos()
    {
    require_once ("control/controle.php");
     $obj = controle::getInstance();
     require_once ("models/Reflexao.php");
     $reflexao = new Reflexao();
                    
      $listaReflexao = array();
                    
       $listaReflexao = $obj->listaMensagensReflexaoControle();

        $cont=1;
        $chave = array_keys($listaReflexao);//pega todas as chaves do array
        // echo $chave;
        $name="<div class='row'>
				 <div id='owl-brand' class='owl-carousel'>
					<div class='row'>";
        for($i=0; $i<sizeof($chave); $i++) {
                        
             $indice = $chave[$i];
			$name.= "<div class='col-md-6'>
						<div class='item box-item'>
						   <img src=".$listaReflexao[$indice]->getImagem()." class='img-circle' />
							<p>".$listaReflexao[$indice]->getDescricao()."</p>
							<span>".$listaReflexao[$indice]->getFuncao()."</span>
						</div>
					  </div>";
          }
  $name.="</div></div></div>";

 echo $name;

}
findAllTestemunhos();
?>
