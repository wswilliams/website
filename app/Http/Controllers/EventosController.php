<?php

namespace App\Http\Controllers;

use App\Eventos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

/**
* 
*/
class EventosController extends Controller
{
    
    function __construct()
    {
        # code...
        $this->middleware('token');
        
    }

    /**
    * Show the profile for the given page.
    *
    * @param  Request  $request
    * @return Response
    */
    public function created(Request $request)
    {
        
       $method = $request->method();

        if ($request->isMethod('post')) {
          
            $pdo = DB::connection('mysql')->getPdo();
            $evento = new Eventos;
            $evento->nome=$request->input('nome');
            $evento->data=$request->input('data');
            $evento->link=$request->input('link');
            $evento->descricao=$request->input('descricao');
            $evento->status=1;
            $evento->save();
            
            DB::disconnect();
           
            echo $evento->toJson();
        }
        
    }

 }