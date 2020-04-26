<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->integer("char_id");
            $table->integer("level");
            $table->integer("strength");
            $table->integer("dexerity");
            $table->integer("stamina");
            $table->integer("intelligence");
            $table->integer("wisdom");
            $table->integer("charisma");
            $table->integer("current_health");
            $table->integer("max_health");
            $table->integer("armor");
            $table->integer("gold");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
