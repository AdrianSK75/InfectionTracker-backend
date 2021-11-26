<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Radius;
use App\Models\Game;

class RadiusSeeder extends Seeder
{
    public function run() {
        $game = Game::findOrFail(1);
        Radius::factory()->times(intval($game->difficulty * 33.34))->create();
    }
}