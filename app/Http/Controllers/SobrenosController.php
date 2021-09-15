<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    public function getViewSobrenos() {
        return view('site.sobre-nos', ['titulo' => 'Sobre Nós']);
    }
}
