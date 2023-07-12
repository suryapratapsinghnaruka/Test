<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('linked_dispatchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrier_packet_id');
            $table->string('DispatcherName');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->foreign('carrier_packet_id')->references('id')->on('carrier_packet')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linked_dispatchers');
    }
};
