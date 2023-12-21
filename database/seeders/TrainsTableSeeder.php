<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            //aggiungere gli altri pezzi
            $train->company = $faker->randomElement(['Trenitalia', 'FNM', 'Tilo']);
            $train->from = $faker->randomElement(['Milano', 'Locarno', 'Saronno', 'Erba', 'Cantù', 'Torino', 'Como', 'Trieste', 'Modena', 'Parma', 'Luino', 'Varese']);
            $train->destination = $faker->randomElement(['Milano', 'Locarno', 'Saronno', 'Erba', 'Cantù', 'Torino', 'Como', 'Trieste', 'Modena', 'Parma', 'Luino', 'Varese']);
            $train->departure_time = $faker->dateTimeBetween("now", "+1 weeks");
            $train->arrival_time = $faker->dateTimeBetween("now", "+1 weeks");
            $train->train_code = $faker->bothify("?#####");
            $train->carriages_numb = $faker->numberBetween(1, 9);
            $train->delay = $faker->numberBetween(0, 1);
            $train->deleted = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
