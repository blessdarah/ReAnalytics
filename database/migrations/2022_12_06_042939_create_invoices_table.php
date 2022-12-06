<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'invoices', 
            function (Blueprint $table) {
                $table->id();
                $table->foreignId("client_id");
                $table->string("code", 12)->unique();
                $table->string("name");
                $table->string("description");
                $table->enum("status", ["paid", "pending"])->default("pending");
                $table->double("total")->default(0.0);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
}
