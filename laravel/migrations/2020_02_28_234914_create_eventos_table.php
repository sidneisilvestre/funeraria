<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("cliente_id")
                ->index()
                ->unsigned()
                ->nullable();
            $table->string("nome_morto");
			            $table->interger("data_evento");
			                        $table->bigInteger("produto_id")
                ->index()
                ->unsigned()
                ->nullable();
            $table->timestamps();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->engine = "innodb";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
