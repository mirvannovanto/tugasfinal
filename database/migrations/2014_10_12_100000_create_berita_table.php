<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateberitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('berita_id');
            $table->text('judul');
            $table->date('tanggal_post');
            $table->text('kategori');
            $table->text('sumberBerita');
            $table->text('jurnalis');
            $table->unsignedBigInteger('komentar_berita_id');
            $table->foreign('komentar_berita_id')->reference('komentar_berita_id')->on('komentar_berita');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
