<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0=>['nome'=>'fornecedor1', 'status' => 'N']
        ];
        $empty = '';
        return view('app.fornecedor.index', compact('empty'));
    }
}
