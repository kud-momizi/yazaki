<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HospitalsTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->tinyInteger('address_id');
            $table->tinyInteger('user_id');
            $table->string('title', 30);
            $table->string('image', 200);
            $table->text('intro', 300);
            $table->boolean('reservation_availability')->default(null);
            $table->integer('tel');
            $table->string('web_url', 200)->nullable();
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
        Schema::dropIfExists('hospitals');
    }
}
