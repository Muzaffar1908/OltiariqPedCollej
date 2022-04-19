<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_settings', function (Blueprint $table) {
            $table->id();
            $table->string('text_uz');
            $table->string('text_ru');
            $table->string('text_en');
            $table->string('address_uz');
            $table->string('address_ru');
            $table->string('address_en');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('text_settings');
    }
}
