<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal_travel', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->date('tanggal_berangkat');
            $table->time('waktu_berangkat');
            $table->integer('kuota');
            $table->decimal('harga_tiket', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_travel');
    }
};
