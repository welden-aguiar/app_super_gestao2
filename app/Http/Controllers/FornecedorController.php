<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function getViewFornecedor () {
        return view('site.app.fornecedor', ['titulo' => 'Fornecedor']);
    }
}
