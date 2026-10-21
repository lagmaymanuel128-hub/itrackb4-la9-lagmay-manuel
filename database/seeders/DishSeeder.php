<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $dishes = [
            ['name' => 'Bicol Express', 'main_ingredient' => 'Pork and Sili', 'origin' => 'Naga City', 'spice_level' => 5, 'is_vegetarian' => false],
            ['name' => 'Laing', 'main_ingredient' => 'Dried Taro Leaves', 'origin' => 'Camarines Sur', 'spice_level' => 3, 'is_vegetarian' => false],
            ['name' => 'Pinangat', 'main_ingredient' => 'Taro Leaves and Coconut Milk', 'origin' => 'Camarines Sur', 'spice_level' => 2, 'is_vegetarian' => false],
            ['name' => 'Kinunot', 'main_ingredient' => 'Shark or Stingray', 'origin' => 'Albay', 'spice_level' => 2, 'is_vegetarian' => false],
            ['name' => 'Sinantol', 'main_ingredient' => 'Santol Fruit', 'origin' => 'Camarines Norte', 'spice_level' => 3, 'is_vegetarian' => false],
            ['name' => 'Sili Ice Cream', 'main_ingredient' => 'Chili and Cream', 'origin' => 'Camarines Sur', 'spice_level' => 1, 'is_vegetarian' => true],
        ];

        foreach ($dishes as $dish) {
            Dish::create($dish);
        }
    }
}