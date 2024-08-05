<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWarranty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_warranty', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('seo_title',255);
            $table->text('description')->nullable();;
            $table->longText('content');
            $table->string('name_vn',255);
            $table->string('seo_title_vn',255);
            $table->text('description_vn')->nullable();;
            $table->longText('content_vn');
            $table->string('slug',255)->nullable();
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
        Schema::dropIfExists('table_warranty');
    }
}
