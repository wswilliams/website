<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('token');
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function findById($id)
    {
       $pdo = DB::connection('mysql')->getPdo();
       $users =User::findOrFail($id)->toJson();
        
        DB::disconnect();
        
        if($users != ""){
            
            return $users;
        }
    }
    
}