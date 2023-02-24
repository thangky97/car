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
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('overall_size')->comment('Kích thước tổng thể');
            $table->string('long')->comment('Chiều dài');
            $table->string('ground_clearance')->comment('Khoảng sáng gầm xe');
            $table->string('luggage_compartment_capacity')->comment('Dung tích khoang hành lý');
            $table->string('weight')->comment('Trọng lượng không tải');
            $table->string('carrying_capacity')->comment('Sức chở');
            $table->string('engine_type')->comment('Loại động cơ');
            $table->unsignedBigInteger('cylinder_capacity_fuel_tank')->comment('Dung tích xylanh & thùng nhiên liệu');
            $table->string('power_torque')->comment('Công suất & Momen xoắn cực đại');
            $table->string('max_speed')->comment('Tốc độ tối đa');
            $table->string('gear')->comment('Hộp số');
            $table->string('transmission')->comment('truyền động');
            $table->string('power_steering')->comment('Trợ lực lái');
            $table->string('suspension_system')->comment('Hệ thống treo');
            $table->string('tire')->comment('Lốp xe');
            $table->string('brake')->comment('Phanh');
            $table->unsignedInteger('status');
            $table->softDeletes();
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
        Schema::dropIfExists('parameters');
    }
};
