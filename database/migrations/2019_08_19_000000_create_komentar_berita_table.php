<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatekomentarberitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_berita', function (Blueprint $table) {
            $table->bigIncrements('komentar_berita_id');
            $table->text('komentar');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->reference('profile_id')->on('profile');
            $table->unsignedBigInteger('berita_id');
            $table->foreign('berita_id')->reference('berita_id')->on('berita');
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
        Schema::dropIfExists('komentar_berita');
    }
}
