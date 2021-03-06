<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('radii')) {
                Schema::create('radii', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('game_id')
                            ->constrained('games', 'id')
                            ->onCascadeUpdate()
                            ->onCascadeDelete();
                    $table->decimal("latitude", 8, 5);
                    $table->decimal("longitude", 8, 5);
                    $table->timestamps();
                });
        }

        // Foreign key to Games Table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radii');
    }
}
