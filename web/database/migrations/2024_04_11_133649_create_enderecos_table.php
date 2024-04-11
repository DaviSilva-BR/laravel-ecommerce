<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("logradouro", 255);
            $table->integer("numero");
            $table->string("cidade", 100);
            $table->string("estado", 50);
            $table->string("cep", 50);
            $table->string("complemento", 120);

            $table->integer("usuario_id")->unsigned();
            $table->timestamps();

            $table->foreign("usuario_id")
            ->references("id")
            ->on("usuarios")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
};
