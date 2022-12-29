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
            $table->string("website")->nullable();
            $table->string("address")->nullable();
            $table->string("zip")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->string("phone")->nullable();
            $table->text("description")->nullable();
            $table->string("logo_path")->nullable();
            $table->string("img_path")->nullable();
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
