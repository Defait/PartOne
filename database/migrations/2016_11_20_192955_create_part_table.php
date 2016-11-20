<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function(Blueprint $table)
        {
            $table->increments('id')
                  ->unique();
            $table->integer('type_id')
                  ->unsigned();
            $table->string('name')
                  ->unique();
            $table->integer('vendor_id')
                  ->unsigned();
            $table->integer('device_id')
                  ->unsigned()
                  ->nullable();
            
        });

        Schema::table('parts', function($table)
        {
            $table->foreign('device_id')
                  ->references('id')
                  ->on('devices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parts');
    }
}
