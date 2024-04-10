<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelAksesTable extends Migration
{
    public function up()
    {
        Schema::create('level_akses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            // Tambahkan kolom-kolom lain sesuai kebutuhan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('level_akses');
    }
}
