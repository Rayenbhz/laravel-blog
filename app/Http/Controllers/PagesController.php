<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome To Laravel!';
        return view('pages.index',compact('title'));
    }
    public function about(){
        $title='ABOUT';
        return view('pages.about',compact('title'));
    }
    public function survices(){
        $data =array(
            'title'=> 'Services',
            'services'=>['web design', 'programming', 'seo']
        );
        return view('pages.survices')->with($data);
    }
    

}
