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
        Schema::create('candidates', function (Blueprint $collection) {
            $collection->id();
            $collection->string('first_name');
            $collection->string('last_name');
            $collection->string('gender');
            $collection->string('address');
            $collection->date('date_of_birth');
            $collection->string('no_hp');
            $collection->string('position');
            $collection->enum('status', ['pending','review','accepted'])->default('pending');
            $collection->string('tell_me_yourself');
            $collection->string('test_score');
            $collection->string('test_result');
            $collection->string('personality');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
