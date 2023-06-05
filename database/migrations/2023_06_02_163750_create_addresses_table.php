<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('locality');
            $table->string('street');
            $table->integer('houseNumber');
            $table->string('postcode');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id', 'address_user_fk')->on('users')->references('id');

            $table->index('user_id', 'address_user_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
