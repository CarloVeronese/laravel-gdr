<?php

namespace Database\Seeders;

use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_character = new Character();
            $new_character->name = $faker->name();
            $new_character->bio = $faker->sentence();
            $new_character->defense = $faker->randomNumber(2, false);
            $new_character->speed = $faker->randomNumber(2, false);
            $new_character->hp = $faker->randomNumber(2, false);
            $new_character->strength = $faker->randomNumber(2, false);
            // $new_character->class = $faker->randomElement(['Mage', 'Fighter', 'Healer', 'Ranger', 'Tank']);

            $new_character->save();
        }
    }
}
