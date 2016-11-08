<?php

use App\Eventos;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

function findAll()
    {
       $pdo = DB::connection('mysql')->getPdo();
       $eventos =Eventos::where('status', 1)
               ->orderBy('nome', 'data','descricao','link')
               ->take(3)
               ->get();
        
        DB::disconnect();
        $name="<div class='row'>
				<div class='wrap'>";
        foreach ($eventos as $event) {
		    
		    $name.= "<div class='col-md-4'>
						<div class='box-item'>
							<h3>".$event->data."</h3>
							<span>".$event->nome."</span>
							<p>".$event->descricao."</p>
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