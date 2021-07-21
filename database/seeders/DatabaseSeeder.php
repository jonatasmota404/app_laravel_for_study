<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::factory(80)->create();
        MotivoContato::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        /*$this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);*/
    }
}
