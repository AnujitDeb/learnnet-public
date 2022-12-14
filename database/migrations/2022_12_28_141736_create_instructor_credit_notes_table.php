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
        Schema::create('instructor_credit_notes', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->integer('instructor_id');
            $table->string('status');
            $table->string('account_number');
            $table->string('transaction_method');
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
        Schema::dropIfExists('instructor_credit_notes');
    }
};
