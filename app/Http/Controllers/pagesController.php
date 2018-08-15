<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index (){
        //return view('pages.index');
        $title = 'Welcome to Prac!';

        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about (){
        return view('pages.about');
    }
    
    public function services (){
        $data = array(
            'title' => 'services',
            'services' => ['Web Design', 'programming ','SEO']
        );
        return view('pages.services')->with($data);
    }
    
}
