<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'clients', 
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description');
                $table->string('phone_number')->nullable();
                $table->string('email')->nullable();
                $table->string('country');
                $table->string('address');
                $table->string('website')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}