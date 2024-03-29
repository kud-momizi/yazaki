<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adderesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_code', 8);
            $table->string('ken_name', 8);
            $table->string('city_name', 24);
            $table->string('town_name', 32);
            $table->string('block_name', 64);
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
        Schema::dropIfExists('adderesses');
    }
}
