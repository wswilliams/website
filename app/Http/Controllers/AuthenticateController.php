<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

/**
* 
*/
class AuthenticateController extends Controller
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
    public function findUser(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            //
            $email= $request->input('nome');
            $password= $request->input('password');
            $password = preg_replace("/[^a-zA-Z0-9_]/", "", strtr($password, "áàãâéêíóôõúüçñÁÀÃÂÉÊÍÓÔÕÚÜÇÑ", "aaaaeeiooouucnAAAAEEIOOOUUCN"));

            $pdo = DB::connection('mysql')->getPdo();
            $users =User::where('email', '=', $email)->get();
            DB::disconnect();
           
            if(strlen($users) == 2){ //objetos vazio
                echo response()->json(['rest' => false],404);
            }else{
                $decrypted=Crypt::decrypt($users[0]->password);
                $ret = strcmp($password,$decrypted);
                switch ($ret) {
                    case 0:
                        
                        $data = Crypt::encrypt(date('Y-m-d H:i:s'));
                        $users[0]->password=$data;
                        echo $users;
                        break;
                    case 1:
                        echo response()->json(['exist' => false],404);
                        break;
                    default:
                        echo response()->json(['exist' => false],404);
                }

            }
        }
        
    }


}