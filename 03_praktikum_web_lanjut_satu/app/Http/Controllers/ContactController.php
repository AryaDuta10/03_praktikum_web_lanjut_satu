<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function contactus(){
        return view ('contactus')
        ->with('url','https://www.educastudio.com/news'
    );
    }
}
