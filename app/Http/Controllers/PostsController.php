<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  PostsController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
    }

    public function about(Request $request)
    {
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'programming', 'mysql'],
            'names' =>[ 
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
            
            ],
            'names2' =>[ 
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
                [
                    'teacher' => 'uthman',
                    'doctor' => 'fatai',
                    'farmer' => 'mustekeem'
                ],
            
            ]
            // 'title' => 'Services',
        );
        
        return view('pages.about')->with($data);
    }
    
    public function access()
    {
        return view('pages.404');
    }
    public function age(Request $request)
    {
        $age = $request->age;
        return view('pages.about')->with('age', $age);
    }


    public function user()
    {
        return view('pages.home');
    }
    public function register()
    {
        return view('pages.register');
    }
   
}
