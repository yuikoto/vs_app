<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs_tables', function (Blueprint $table) {
            $table->id();
            $table->date('vaitel_date');
            $table->time('vaitel_time');
            $table->float('temperature')->nullable();
            $table->integer('bp_up')->nullable();
            $table->integer('bp_under')->nullable();
            $table->integer('pulse')->nullable();
            $table->string('vaitel_comment')->nullable();
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
        Schema::dropIfExists('vs_tables');
    }
}
