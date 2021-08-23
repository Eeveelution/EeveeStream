<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PopulateBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("INSERT INTO `branches` (name, latest_version, latest_build, type) VALUES".
							"('stable', '20210823.0', 0, 'stream'),".
							"('stable', 'xxxxxxxx.0', 0, 'cho'),".
							"('stable', 'xxxxxxxx.0', 0, 'web')"
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
