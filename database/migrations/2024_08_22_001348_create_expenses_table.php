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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id(); // Primary Key: รหัสค่าใช้จ่าย
            $table->unsignedBigInteger('per_id'); // Foreign Key: รหัสพนักงาน
            $table->string('exp_type'); // ประเภทค่าใช้จ่าย
            $table->decimal('amount', 10, 2); // จำนวนเงิน
            $table->date('exp_date'); // วันที่เกิดค่าใช้จ่าย
            $table->string('pay_method'); // วิธีการชำระเงิน
            $table->text('desc')->nullable(); // รายละเอียดเพิ่มเติม (nullable)
            $table->timestamps(); // Timestamps: created_at, updated_at

            // Define foreign key constraint for per_id (assuming you have an employees table)
            $table->foreign('per_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
