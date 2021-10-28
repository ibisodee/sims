<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();

            $table->string('regno');
            $table->string('session');
            $table->string('class');
            $table->string('year');
            
            $table->string('amount_paid')->nullable();
            $table->string('type')->nullable();
            $table->string('amount_owe')->nullable();
            $table->string('amount_payable')->nullable();
            $table->string('method')->nullable();
            $table->string('date_paid')->nullable();
            
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
        Schema::dropIfExists('fees');
    }
}
