<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SiteContato::factory(80)->create();
        // \App\Models\User::factory(10)->create();
        /*$this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);*/
    }
}
