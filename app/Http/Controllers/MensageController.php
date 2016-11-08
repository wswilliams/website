<?php

namespace App\Http\Controllers;

use App\Mensagem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

/**
* 
*/
class MensageController extends Controller
{
    
    function __construct()
    {
        # code...
    }


/**
    * Show the profile for the given user.
    *
    * @param  Request  $request
    * @return Response
    */
    public function created(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
          
            $pdo = DB::connection('mysql')->getPdo();
            $mensage = new Mensagem;
            $mensage->nome=$request->input('name');
            $mensage->email=$request->input('email');
            $mensage->assunto=$request->input('subject');
            $mensage->mensagem=$request->input('message');
            $mensage->save();

            DB::disconnect();
           
            echo $mensage;
        }
        
    }
 }