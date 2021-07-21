<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivo_contato = MotivoContato::all();
        return view('site.home.index', ['titulo' => 'Home', 'motivo_contato'=>$motivo_contato]);
    }
}
