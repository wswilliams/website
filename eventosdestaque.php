<?php



function findAll()
    {

     require_once ("control/controle.php");
     $obj = controle::getInstance();
     require_once ("models/Evento.php");
     $evento = new Evento();
                    
      $lista = array();
                    
       $lista = $obj->listaEventosControle();

        $cont=1;
        $chave = array_keys($lista);//pega todas as chaves do array
        //echo $chave;
        $name="<div class='row'>
				<div class='wrap'>";
        for($i=0; $i<sizeof($chave); $i++) {
                        
             $indice = $chave[$i];
             $name.= "<div class='col-md-4'>
						<div class='box-item'>
							<h3>".$lista[$indice]->getData()."</h3>
							<span>".$lista[$indice]->getNome()."</span>
							<p>".$lista[$indice]->getDescricao()."</p>
							<a href='#' class='btn btn-skin'>LEARN MORE</a>
						</div>
					</div>";
          }

  $name.= "<div class='clear'></div>
		  </div>
		</div>";
 echo $name;
 }
   findAll();

?>