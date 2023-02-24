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
        Schema::create('safes', function (Blueprint $table) {
            $table->id();
            $table->string('reverse_sensor')->comment('Cảm biến lùi');
            $table->string('reverse_camera')->comment('Camera lùi');
            $table->string('360_camera')->comment('Camera 360o hiển thị 3D');
            $table->string('fhandbrake_holdbrake')->comment('Phanh tay điện tử và giữ phanh tự động');
            $table->string('safety_airbag')->comment('Túi khí an toàn');
            $table->string('body_stabilization_system')->comment('Hệ thống ổn định thân xe điện tử');
            $table->string('traction_control_system')->comment('Hệ thống kiểm soát độ bám đường');
            $table->string('direct_tire_pressure_sensor')->comment('Cảm biến áp suất lốp trực tiếp');
            $table->string('hill_start_systemt')->comment('Hệ thống khởi hành ngang dốc');
            $table->string('downhill_assist_system')->comment('Hệ thống hỗ trợ đổ đèo');
            $table->string('corner_brake_control')->comment('Kiểm soát phanh ở góc cua');
            $table->string('dry_disc_brake')->comment('Chức năng làm khô phanh đĩa');
            $table->string('anti-lock brakes')->comment('Hệ thống chống bó cứng phanh & phân phối lực phanh điện tử');
            $table->string('emergency_brake_warning')->comment('Hệ thống cảnh báo phanh khẩn cấp');
            $table->string('seatbelt')->comment('Dây đai an toàn');
            $table->string('antitheft_encryption_key')->comment('Chìa khóa mã hóa chống trộm');
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
        Schema::dropIfExists('safes');
    }
};
