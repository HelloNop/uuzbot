<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinyalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sinyals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('market_id');
            $table->string('waktu');
            $table->string('signal');
            $table->string('open');
            $table->string('notif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinyals');
    }
}
