<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StreamVersions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("stream_versions", function (Blueprint $table) {
        	$table->id("build");
        	$table->string("minor");
        	$table->boolean("allow_cho");
        	$table->boolean("allow_submit");
        	$table->boolean("allow_fetch");
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("stream_versions");
    }
}
