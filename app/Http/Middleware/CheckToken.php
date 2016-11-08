<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Crypt;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $dataStart=date(Crypt::decrypt($request->token));
        $dataEnd = date('Y-m-d H:i:s');

        $unix_data1 = strtotime($dataEnd);
        $unix_data2 = strtotime($dataStart);

        $minutos = (($unix_data1 - $unix_data2) % 3600) / 60;

        // if ($request->token != "7b13507dd4d3b93578af7d83fbf8be0ca686f4b5") {
        if ($minutos > 10) {
            return redirect('/app');
        }
        return $next($request);
    }
}
