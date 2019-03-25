<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbambilcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbambilcards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodeambil')->unique();
            $table->smallinteger('kantor_ambil');
            $table->string('list_card');
            $table->date('tanggalambil');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbambilcards');
    }
}
