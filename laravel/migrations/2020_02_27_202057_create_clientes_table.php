<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cclientes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string("nome");
			$table->integer("cpf");
						$table->integer("tel1");
						$table->integer("tel2");
						$table->string("email");
            $table->timestamps();
			$table->engine='innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cclientes');
    }
}
