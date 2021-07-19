<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(99) 99999-0000';
        $contato->motivo_contato = 1;
        $contato->email = 'contato@sg.com.br';
        $contato->mensagem = 'Seja bem vindo';
        $contato->save();*/

        SiteContato::factory()->count(100)->create();
    }
}
