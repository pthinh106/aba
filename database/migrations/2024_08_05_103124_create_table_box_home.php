<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBoxHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_box_home', function (Blueprint $table) {
            
            $table->id();
            $table->string('nameBox_US',255);
            $table->longText('descriptionBox_US');
            $table->string('nameBox_VN',255);
            $table->longText('descriptionBox_VN');
            $table->string('image',255);
            $table->string('target_url',255);
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('table_box_home');
    }
}
