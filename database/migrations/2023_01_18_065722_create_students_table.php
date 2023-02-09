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
        Schema::create('students', function (Blueprint $table) {
        	$table->unsignedbiginteger('nisn');
            $table->primary('nisn');
            $table->biginteger('nis')->unique();
            $table->string('name');
            $table->string('password');
            $table->foreignId('id_class')->constrained('classes', 'id_class');
            $table->text('address');
            $table->string('phone_number', 13);
            $table->foreignId('id_spp')->constrained('spps', 'id_spp');
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
        Schema::dropIfExists('students');
    }
};
