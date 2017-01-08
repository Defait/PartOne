<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartIdToDisks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disks', function($table)
        {
            $table->integer('part_id')
                  ->unsigned()
                  ->nullable();
        });
        
        Schema::table('disks', function($table)
        {
            $table->foreign('part_id')
                  ->references('id')
                  ->on('parts');
        });
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
