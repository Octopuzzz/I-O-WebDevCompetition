<?php

namespace Database\Seeders;

use App\Models\PvIngredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PvIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PvIngredient::create([
            'Ingredient_ID' => 1,
            'Food_id' => 1,
        ]);
        PvIngredient::create([
            'Ingredient_ID' => 2,
            'Food_id' => 1,
        ]);
        PvIngredient::create([
            'Ingredient_ID' => 3,
            'Food_id' => 2,
        ]);
    }
}
