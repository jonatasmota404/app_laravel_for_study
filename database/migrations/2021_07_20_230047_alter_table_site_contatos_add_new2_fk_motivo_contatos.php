<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddNew2FkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contato_id')->nullable();
        });

        //atribuindo motivo_contato para a nova coluna motivo_contato_id
        DB::statement('UPDATE site_contatos set motivo_contato_id = motivo_contato');

        //criando a fk e removendo a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contato_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criar a coluna motivo_contato e removendo a fk
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contato_id_foreing');
        });

        //atribuindo motivo_contato_id para a coluna motivo_contato
        DB::statement('UPDATE site_contatos set motivo_contato = motivo_contato_id');
    }
}
