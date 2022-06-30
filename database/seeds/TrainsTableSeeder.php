<?php

use App\train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dates = [ 
            '2022-06-29',
            '2022-06-27',
            '2022-06-30',
            '2022-07-01'
        ];

        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->data_partenza = $dates[rand(0, count($dates) - 1)];
            $train->data_arrivo = date('Y-m-d H:i:s', strtotime($train->data_partenza . '+1 day'));
            $train->codice_treno =  $i;
            $train->numero_carrozze = rand(1, 25);

            $train->save();
        }
    }
}
