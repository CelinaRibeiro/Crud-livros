<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{

    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->float('preco');
            $table->timestamps();
        });
        
    }

    public function down()
    {
       Schema::dropIfExists('livros');
    }
}
