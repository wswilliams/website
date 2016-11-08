<?php

use App\Testemunhos;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

function findAllTestemunhos()
    {
    	$pdo = DB::connection('mysql')->getPdo();
       $testemunhos =Testemunhos::where('status', 1)
               ->orderBy('nome', 'descricao','imagem','funcao')
               ->take(4)
               ->get();

               $name="<div class='row'>
				<div class='wrap'>";
        foreach ($testemunhos as $test) {
		    
		    $name.= "<div class='col-md-4'>
						<div class='box-item'>
							<img src='".$test->imagem."' /><br>
							<span>".$test->funcao."</span>
							<p>".$test->descricao."</p>
						</div>
					</div>";
		}
  $name.= "<div class='clear'></div>
		  </div>
		</div>";
echo $name;
}
findAllTestemunhos();
?>
