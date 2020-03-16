<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('thn_terbit');
            $table->string('penerbit');
            $table->string('harga');
            $table->integer('penulis')->unsigned();
            $table->string('kategori');
            $table->string('gambar');
            $table->text('sinopsis'); 
            $table->timestamps();

            $table->foreign('penulis')->references('id')->on('penulis')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novel');
    }
}
