<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
        //adicionar relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreignId('unidade_id')->constrained();
        });
        //adicionar relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->foreignId('unidade_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropConstrainedForeignId('unidade_id');//funciona quando os nomes seguem os padrões

            //maneira menos convencional
            /*$table->dropForeign('produto_detalhes_unidade_id_foreing'); //[table]_[coluna]_foreing
            $table->dropColumn('unidade_id');*/
        });
        //remover relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropConstrainedForeignId('unidade_id');//funciona quando os nomes seguem os padrões

            //maneira menos convencional
            /*$table->dropForeign('produtos_unidade_id_foreing'); //[table]_[coluna]_foreing
            $table->dropColumn('unidade_id');*/
        });

        Schema::dropIfExists('unidades');
    }
}
