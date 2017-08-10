<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Website extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('website', function (Blueprint $table) {
        $table->increments('id');
        $table->string('company');
        $table->string('website');
        $table->string('ftp_host');
        $table->string('ftp_name');
        $table->string('ftp_password');
        $table->string('database_host');
        $table->string('database_name');
        $table->string('database_username');
        $table->string('database_password');
        $table->string('cms_address');
        $table->string('cms_username');
        $table->string('cms_password');
        $table->string('company');
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
        Schema::dropIfExists('tasks');
    }
}
