<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveDeviceIdColumnFromPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Made a rookie mistake and only removed the foreign key relation to device_id
        // But I never removed the column. So we do that here.
        Schema::table('parts', function (Blueprint $table) {
            $table->dropColumn('device_id');
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
    }
}
