<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAddonSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_addon_setting', function (Blueprint $table) {
            $table->id();
            $table->string('company',255);
            $table->string('favicon',255);
            $table->string('description',255);
            $table->string('canonical',255);
            $table->string('copyright',255);
            $table->string('author',255);
            $table->string('og_url',255);
            $table->string('og_title',255);
            $table->string('og_description',255);
            $table->string('link_facebook',255);
            $table->string('link_youtube',255);
            $table->string('link_zalo',255);
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
        Schema::dropIfExists('table_addon_setting');
    }
}
