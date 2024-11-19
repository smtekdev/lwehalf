<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Mail\ContactMail; // Add this line

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }
        public function about()
    {
        return view('about');
    }
         public function services()
    {
        return view('services');
    }
         public function portfolio()
    {
        return view('portfolio');
    }
         public function contact()
    {
        return view('contact');
    }


}