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
            $table->id('id_spp_payments');
            $table->foreignId('id_employee')->constrained('employees', 'id_employee');
            $table->foreignId('nisn')->constrained('students', 'nisn');
            $table->date('payment_date');
            $table->unsignedbiginteger('id_spp');
            $table->foreign('id_spp')->references('id_spp')->on('students');
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
