<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVendorFkToDevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devices', function($table)
        {
            $table->integer('vendor_id')
                  ->nullable()
                  ->unsigned();
            $table->foreign('vendor_id')
                  ->references('id')
                  ->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devices', function($table)
        {
            $table->dropForeign(['vendor_id']);
        });
    }
}
