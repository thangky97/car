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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('headlight')->comment('Đèn pha');
            $table->string('automatic_headlight')->comment('Đèn pha tự động');
            $table->string('height_adjustable_headlight')->comment('Đèn pha điều chỉnh được độ cao');
            $table->string('led_daytime_running_light')->comment('Đèn LED chiếu sáng ban ngày');
            $table->string('directional_waiting_light')->comment('Đèn chờ dẫn đường');
            $table->string('rear_light_cluster')->comment('Cụm đèn phía sau');
            $table->string('fog_light')->comment('Đèn sương mù');
            $table->string('overhead_brake_light')->comment('Đèn báo phanh trên cao');
            $table->string('rearview_mirror_turn_signal_light')->comment('Gương chiếu hậu chỉnh điện & tích hợp đèn báo rẽ');
            $table->string('outside_door_handle')->comment('Tay nắm cửa ngoài mạ crom');
            $table->string('front_windshield_wiper')->comment('Gạt nước kính trước');
            $table->string('windshield_wiper_rear_window_heater')->comment('Gạt nước kính sau và sưởi kính sau');
            $table->string('roof_rack')->comment('Giá nóc');
            $table->string('rear_spoiler')->comment('Cánh lướt gió đuôi xe');
            $table->string('chrome_side_brace')->comment('Nẹp hông xe chrome');
            $table->string('antenna')->comment('Ăng-ten');
            $table->string('steering_wheel_automatic_throttle')->comment('Vô lăng bọc da & ga tự động');
            $table->string('steering_wheel_up_down')->comment('Vô lăng điều chỉnh lên xuống');
            $table->string('air_conditioning')->comment('Điều hòa nhiệt độ');
            $table->string('rear_seat_air_vents')->comment('Cửa gió ở hàng ghế sau');
            $table->string('driver_seat')->comment('Ghế lái');
            $table->string('front_passenger_seat')->comment('Ghế hành khách phía trước');
            $table->string('seat_material')->comment('Chất liệu ghế');
            $table->string('second_row_seats')->comment('Hàng ghế thứ hai');
            $table->string('inner_door_handle')->comment('Tay nắm cửa trong mạ crôm');
            $table->string('electrically_controlled_glass_doors')->comment('Cửa kính điều khiển điện');
            $table->string('screen')->comment('Màn hình hiển thị đa thông tin');
            $table->string('child_safety_seat_hook')->comment('Móc gắn ghế an toàn trẻ em');
            $table->string('entertainment')->comment('Hệ thống giải trí');
            $table->string('front_row_armrest')->comment('Tựa tay trung tâm hàng ghế trước');
            $table->string('smartkey_pushbutton_start')->comment('Chìa khóa thông minh và khởi động bằng nút bấm');
            $table->string('automatic_door_lock')->comment('Khóa cửa tự động cảm biến tốc độ');
            $table->string('loudspeakert')->comment('Hệ thống loa');
            $table->string('sunroof')->comment('Cửa sổ trời toàn cảnh');
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('equipments');
    }
};
