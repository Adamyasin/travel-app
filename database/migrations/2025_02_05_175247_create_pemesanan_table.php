<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke users
            $table->foreignId('jadwal_id')->constrained('jadwal_travels')->onDelete('cascade'); // Relasi ke jadwal_travel
            $table->integer('jumlah_tiket');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status_pembayaran', ['pending', 'lunas', 'dibatalkan'])->default('pending');
            $table->string('kode_invoice')->unique(); // Tambahkan kode invoice unik
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
