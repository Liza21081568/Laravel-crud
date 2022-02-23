<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome to Laravel!';
        //   return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
     

    }
    public function about(){
        $title= 'ABOUT US';

        return view('pages.about')->with('title', $title);
  }
  public function services(){
    $data = array(   
         'title' => 'services',
         'services' => ['web designing', 'web developing', 'Front-end','Back-end', 'Content Writing']
    );
    
    return view('pages.services')->with($data);
  }
}
