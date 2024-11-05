<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_ropa')->constrained('tipo_ropas');
            $table->decimal('precio', 8, 2);
            $table->foreignId('id_marca')->constrained('marcas');
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
