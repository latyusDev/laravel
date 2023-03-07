<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {
   public function setCookie(Request $request) {
      $minutes = 2;
      $response = new Response();
      $response->withCookie(cookie('name', 'latyusDev', $minutes));
    //   $response->(withCookie(cookie()->forever('name', 'usman')))
      return $response;
   }

   public function getCookie(Request $request) {
      $value = $request->cookie('name');
      echo "{$value} is awesome";
   }
}