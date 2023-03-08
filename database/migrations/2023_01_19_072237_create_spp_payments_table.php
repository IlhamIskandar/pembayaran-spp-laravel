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
        Schema::create('spp_payments', function (Blueprint $table) {
            $table->id('spp_payment_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('nisn')->constrained('students', 'nisn');
            $table->date('payment_date');
            $table->unsignedbiginteger('spp_id');
            $table->foreign('spp_id')->references('spp_id')->on('students');
            $table->smallinteger('pay_amount');
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
        Schema::dropIfExists('spp_payments');
    }
};
