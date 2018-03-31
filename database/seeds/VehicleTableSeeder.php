<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use App\Vehicle;
use Faker\Factory as Faker;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        vehicle::create([
            'id' => '3',
            'model' => 'Avalanche',
            'color' => 'Aqua',
            'manufacturer_id' => '1',
        ]);

        vehicle::create([
            'id' => '4',
            'model' => 'Rex',
            'color' => 'Purple',
            'manufacturer_id' => '2',
        ]);

        vehicle::create([
            'id' => '6',
            'model' => 'Quia',
            'color' => 'Lime',
            'manufacturer_id' => '1',
        ]);

        vehicle::create([
            'id' => '10',
            'model' => 'Toro',
            'color' => 'Black',
            'manufacturer_id' => '5',
        ]);

        vehicle::create([
            'id' => '11',
            'model' => 'Rex',
            'color' => 'White',
            'manufacturer_id' => '5',
        ]);

        vehicle::create([
            'id' => '12',
            'model' => 'Titan',
            'color' => 'Blue',
            'manufacturer_id' => '5',
        ]);

        vehicle::create([
            'id' => '13',
            'model' => 'Trail-Force',
            'color' => 'Orange',
            'manufacturer_id' => '5',
        ]);

        vehicle::create([
            'id' => '14',
            'model' => 'Kwd',
            'color' => 'White',
            'manufacturer_id' => '1',
        ]);


        $faker = Faker::create();
        $amount = Manufacturer::all()->count();
        for ($i = 0; $i < 10; $i++) {
            vehicle::create([
                'color' => $faker->safeColorName(),
                'model' => $faker->word(),
                'manufacturer_id' => $faker->numberBetween(1, $amount),
            ]);
        }
    }
}
