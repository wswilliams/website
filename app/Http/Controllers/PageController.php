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
class PageController extends Controller
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
    public function contenerIndex(Request $request)
    {
        
        return view('app/welcome');
        
    }
/**
    * Show the profile for the given page.
    *
    * @param  Request  $request
    * @return Response
    */
    public function contenerEventosAdd(Request $request)
    {
        
        return view('app/addeventos');
        
    }
 }