<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContactController extends Controller
{
    public function contact()
    {
        $motivo_contato = MotivoContato::all();
        return view('site.contact.index', ['titulo' => 'Contato', 'motivo_contato' => $motivo_contato]);
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome'=>'required|min:3|max:40|unique:site_contatos',
            'telefone'=>'required',
            'email' => 'required|email',
            'mensagem'=>'required|max:200',
            'motivo_contato_id' => 'required'
        ];

        $feedback = [
            'nome.min' => 'O campo precisa ter pelo menos 3 caractéres',
            'nome.max' => 'O campo pode ter no máximo 40 caracteres',
            'nome.unique' => 'Nome já existente',
            'email.email' => 'Digite email válido',
            'mensagem.max' => 'Mensagem pode ter no máximo 200 caracteres',
            'motivo_contato_id.required' => 'Motivo obrigatório',

            'required' => 'O campo :attribute deve ser preenchido'
        ];
        $request->validate($regras, $feedback);
        $contact = new SiteContato();
        $contact->fill($request->all())->save();
        //$contact->create($request->all());
        //SiteContato::create($request->all());
        //$contact->create($request->all());
    }
}
