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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table -> string('company');
            $table -> string('department_station');
            $table -> string('arrival_station');
            $table -> dateTime('department_time');
            $table -> dateTime('arrival_time');
            $table -> integer('train_id') -> unique();
            $table -> tinyInteger('coach_number');
            $table -> boolean('on_time') -> default(true);
            $table -> boolean('available') -> default(true);

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
