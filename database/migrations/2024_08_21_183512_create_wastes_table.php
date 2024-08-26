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
        Schema::create('wastes', function (Blueprint $table) {
            $table->id(); // ใช้ id() เพื่อสร้างคอลัมน์ auto-increment ที่ชื่อ 'id'
            $table->bigInteger('village_id')->unsigned();// เปลี่ยนเป็น bigInteger เพื่อให้ตรงกับ 'village_id' ใน villages
            $table->date('date'); // วันที่เก็บขยะ
            $table->integer('total_waste'); // ปริมาณขยะทั้งหมด
            $table->integer('gen_waste'); // ขยะทั่วไป
            $table->integer('org_waste'); // ขยะอินทรีย์
            $table->integer('rec_waste'); // ขยะรีไซเคิล
            $table->integer('haz_waste'); // ขยะอันตราย
            $table->integer('inf_waste'); // ขยะติดเชื้อ
            $table->integer('ind_waste'); // กากอุตสาหกรรม
            $table->integer('e_waste'); // ขยะอิเล็คทรอนิค

            // กำหนด foreign key constraint
            $table->foreign('village_id')->references('village_id')->on('villages')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wastes');
    }
};
