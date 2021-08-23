<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Branches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("branches", function (Blueprint $table) {
        	$table->string("name")->primary()->unique();
        	$table->string("latest_version")->unique();
        	$table->enum("type", ["web", "stream", "cho"]);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("branches");
    }
}
