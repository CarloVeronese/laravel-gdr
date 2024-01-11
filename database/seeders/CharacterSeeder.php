<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        $types = Type::all();
        $type_ids = $types->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $new_character = new Character();
            $new_character->name = $faker->name();
            $new_character->bio = $faker->sentence();
            $new_character->defense = $faker->randomNumber(2, false);
            $new_character->speed = $faker->randomNumber(2, false);
            $new_character->hp = $faker->randomNumber(2, false);
            $new_character->strength = $faker->randomNumber(2, false);
            $new_character->type_id = $faker->randomElement($type_ids);

            $new_character->save();
        }
    }
}
