<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('from', 100);
            $table->string('destination', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->tinyText('train_code');
            $table->tinyInteger('carriages_numb')->unsigned();
            $table->tinyInteger('delay')->default(0)->unsigned();
            $table->tinyInteger('deleted')->default(0)->unsigned();
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
        Schema::dropIfExists('trains');
    }
};
