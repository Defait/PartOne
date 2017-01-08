<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveDeviceIdColumFromParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parts', function ($table) {
            $table->dropForeign('parts_device_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parts', function ($table) {
            $table->integer('device_id')
                  ->unsigned();
        });

        Schema::table('parts', function ($table) {
            $table->foreign('device_id')
                  ->references('id')
                  ->on('devices');
        });
    }
}
