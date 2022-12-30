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
        Schema::create('business_profile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("business_type")->nullable();
            $table->string("business_name")->nullable();
            $table->string("category_1")->nullable();
            $table->string("category_2")->nullable();
            $table->string("category_3")->nullable();
            $table->string("category_4")->nullable();
            $table->string("category_5")->nullable();
            $table->string("website")->nullable();
            $table->string("address")->nullable();
            $table->string("zip")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->string("phone")->nullable();
            $table->text("description")->nullable();
            $table->string("logo_path")->nullable();
            $table->string("img_path")->nullable();
            $table->string("monday_start_time")->nullable();
            $table->string("monday_end_time")->nullable();
            $table->string("tuesday_start_time")->nullable();
            $table->string("tuesday_end_time")->nullable();
            $table->string("wednesday_start_time")->nullable();
            $table->string("wednesday_end_time")->nullable();
            $table->string("thursday_start_time")->nullable();
            $table->string("thursday_end_time")->nullable();
            $table->string("friday_start_time")->nullable();
            $table->string("friday_end_time")->nullable();
            $table->string("saturday_start_time")->nullable();
            $table->string("saturday_end_time")->nullable();
            $table->string("sunday_start_time")->nullable();
            $table->string("sunday_end_time")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_profile');
    }
};
