<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('isActive');
            $table->string('serial');
            $table->string('wwn');
            $table->string('rpm');
            $table->string('size');
            $table->integer('vendor_id')
                  ->unsigned();
            $table->integer('device_id')
                  ->unsigned();
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
        Schema::drop('disks');
    }
}
