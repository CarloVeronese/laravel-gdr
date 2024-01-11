<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            [
                'name' => 'Longsword',
                'description' => "A sharp two-handed sword",
                'price' => 50
            ],
            [
                'name' => 'Leather Armor',
                'description' => "Light armor made of leather",
                'price' => 25
            ],
            [
                'name' => 'Healing Potion',
                'description' => 'Heals 2d4 + 2 hit points',
                'price' => 10
            ],
            [
                'name' => 'Wand of Fire',
                'description' => 'A magical wand that casts flames',
                'price' => 30
            ],
            [
                'name' => 'Backpack',
                'description' => 'A sturdy backpack for carrying equipment',
                'price' => 15
            ],
        ];


        foreach ($items as $item) {

            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->description = $item['description'];
            $new_item->price = $item['price'];

            $new_item->save();
        }
    }
}
