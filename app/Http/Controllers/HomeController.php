<?php

namespace App\Http\Controllers;
use App\post;


class HomeController extends Controller
{
    public function home(){
        //menampilkan berita dari database
        $berita = post::all();
        return view('home', compact('berita'));

       // return view('home');
    }
    
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }
}
