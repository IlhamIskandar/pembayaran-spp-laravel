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
        Schema::create('log_spps', function (Blueprint $table) {
            $table->id();
            $table->string('process', 50);
            $table->string('old_year')->nullable();
            $table->string('new_year')->nullable();
            $table->string('old_nominal')->nullable();
            $table->string('new_nominal')->nullable();
            $table->timestamps();
        });

        DB::unprepared("
            CREATE TRIGGER spp_insert_trigger AFTER INSERT ON spps
            FOR EACH ROW
            BEGIN
                INSERT INTO log_spps(process, new_year, new_nominal, created_at, updated_at)
                VALUES('Tambah Data', new.year, new.nominal,NOW(),NOW());
            END
        ");

        DB::unprepared("
            CREATE TRIGGER spp_delete_trigger AFTER UPDATE ON spps
            FOR EACH ROW
            BEGIN
                INSERT INTO log_spps(process, old_year, new_year, old_nominal, new_nominal, created_at, updated_at)
                VALUES('Ubah Data', old.year, new.year, old.nominal, new.nominal, NOW(),NOW());
            END
        ");

        DB::unprepared("
            CREATE TRIGGER spp_update_trigger AFTER DELETE ON spps
            FOR EACH ROW
            BEGIN
                INSERT INTO log_spps(process, old_year, old_nominal, created_at, updated_at)
                VALUES('Hapus Data', old.year, old.nominal, NOW(),NOW());
            END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_spp');
        DB::unprepared("DROP TRIGGER 'spp_trigger'");
    }
};