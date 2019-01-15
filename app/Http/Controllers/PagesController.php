<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Benilde Reservation Online Services";
       // return view('pages.index');
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }


}
