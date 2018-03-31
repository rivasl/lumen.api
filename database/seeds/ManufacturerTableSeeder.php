<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use Faker\Factory as Faker;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        manufacturer::create([
            'name' => 'Renault',
            'website' => 'renault.com',
        ]);

        manufacturer::create([
            'name' => 'Toyota',
            'website' => 'toyota.com',
        ]);

        manufacturer::create([
            'name' => 'Chevrolet',
            'website' => 'chevrolet.com',
        ]);

        manufacturer::create([
            'name' => 'Fiat',
            'website' => 'fiat.com',
        ]);

        manufacturer::create([
            'name' => 'Mazda',
            'website' => 'mazda.com',
        ]);

        manufacturer::create([
            'name' => 'Dodge',
            'website' => 'dodge.com',
        ]);

        manufacturer::create([
            'name' => 'Hyundai',
            'website' => 'hyundai.com',
        ]);

        manufacturer::create([
            'name' => 'Ford',
            'website' => 'ford.com',
        ]);

        manufacturer::create([
            'name' => 'Jeep',
            'website' => 'jeep.com',
        ]);


        $faker=Faker::create();
        for ($i=0; $i < 3; $i++) {
            manufacturer::create([
                'name'=>$faker->name(),
                'website'=>$faker->domainName(),
            ]);
        }
    }
}
