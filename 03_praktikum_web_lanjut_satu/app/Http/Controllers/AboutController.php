<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutus() {
        $data= array('nama' => 'Arya Duta Nusa',
        'nim' => '1941720097');
        return view ('about-us',$data);

    }
}
