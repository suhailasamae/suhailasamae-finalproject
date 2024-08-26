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
        Schema::create('garbages', function (Blueprint $table) {
            $table->id(); // รหัสไอดี (PK)
            $table->string('loc_name');        // ชื่อสถานที่
            $table->string('disp_method');     // วิธีการกำจัด
            $table->date('date');              // วันที่กำจัด
            $table->integer('waste_amt'); // ปริมาณขยะ
            $table->string('addr');            // ที่อยู่
            $table->string('caretaker');       // ผู้ดูแล
            $table->string('phone');           // เบอร์โทร
            $table->timestamps();              // timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garbages');
    }
};
