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
        Schema::create('business_hours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("business_id");
            $table->string("weekday")->nullable();
            $table->string("from_time")->nullable();
            $table->string("to_time")->nullable();

            $table->foreign('business_id')
                    ->references('id')
                    ->on('business_profile')
                    ->onDelete('cascade');
            });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_hours');
    }
};
