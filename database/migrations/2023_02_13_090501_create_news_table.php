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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('images');
            $table->string('title');
            $table->string('description');
            $table->string('content');
            $table->date('post_date')->comment('Ngày đăng bài');
            $table->unsignedInteger('cate_id')->comment('Danh mục bài viết');
            $table->unsignedInteger('cate_car_id')->comment('Danh mục ô tô');
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
        Schema::dropIfExists('news');
    }
};
