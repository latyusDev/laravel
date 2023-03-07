<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class getIt extends Controller
{
    //
    public function getC(Request $request){

        $response = new Response('age');

        $response-> withCookie(cookie('age', '34', 5));
        // $response->withCookie(cookie('name', 'virat', $minutes));

        return $response;

    }
}
