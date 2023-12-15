<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->randomElement(['Italo', 'Trenitalia', 'DeutscheBahn']);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_partenza = $faker->dateTimeThisMonth('+12 days')->format('H:i:s');
            $new_train->orario_arrivo = $faker->dateTimeThisMonth('+14 days')->format('H:i:s');
            $new_train->data_partenza = $faker->dateTimeThisMonth('+12 days')->format('Y-m-d');
            $new_train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $new_train->numero_carrozze = $faker->numberBetween(7, 15);
            $new_train->in_orario = $faker->boolean;
            $new_train->cancellato = $faker->boolean;

            $new_train->save();
        }
    }
}
