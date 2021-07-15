<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //return "A soma de $p1 e $p2 é: ". ($p1+$p2);

        //return view('site.teste.index', ['p1'=>$p1, 'p2'=>$p2]);//array associativo

        //return view('site.teste.index', compact('p1', 'p2')); compact melhor metodo

        return view('site.teste.index')->with('p1', $p1)->with('p2', $p2);//with
    }
}