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
            $table->foreignId('class_id')->constrained('classes', 'class_id')->default(0);
            $table->text('address');
            $table->string('phone_number', 13);
            $table->foreignId('spp_id')->constrained('spps', 'spp_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
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
