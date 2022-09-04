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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name_client',80);
            $table->string('mobile_number_client',20);
            $table->unsignedBigInteger('solicited_service_id')->default(1);
            $table->string('comment_client');
            $table->date('date_service')->nullable();
            $table->time('hour_service')->nullable();
            $table->unsignedBigInteger('status_service_id')->default(1);
            $table->float('cost_service');
            $table->unsignedBigInteger('personal_service_id')->default(1);
            $table->timestamps();

            $table->foreign('solicited_service_id')
            ->references('id')
            ->on('solicited_services')
            ->onDelete('cascade');

            $table->foreign('status_service_id')
            ->references('id')
            ->on('status_services')
            ->onDelete('cascade');

            $table->foreign('personal_service_id')
            ->references('id')
            ->on('personal_services')
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
        Schema::dropIfExists('services');
    }
};
