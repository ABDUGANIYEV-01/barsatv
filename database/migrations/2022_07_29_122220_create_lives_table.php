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
        Schema::create('lives', function (Blueprint $table) {
            $table->id();
            $table->string('firstclub');
            $table->string('secondclub');
            $table->string('account');
            $table->string('Day');
            $table->string('gol1');
            $table->string('gol1text');
            $table->string('gol2');
            $table->string('gol2text');
            $table->string('livelink');
            $table->string('firstclubimg');
            $table->string('secondclubimg');

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
        Schema::dropIfExists('lives');
    }
};
