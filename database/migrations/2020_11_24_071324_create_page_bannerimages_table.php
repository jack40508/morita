<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBannerimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_bannerimages', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->integer('bannerimage_id');
            $table->boolean('reserve')->default(false);
            $table->date('start_at')->default(date('Y/m/d H:i:s'));
            $table->date('end_at')->default('2119/12/31');
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
        Schema::dropIfExists('page_bannerimages');
    }
}
