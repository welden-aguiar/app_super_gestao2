<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function getViewPrincipal () {
        return view('site.principal', ['titulo' => 'Home']);
    } 
}
