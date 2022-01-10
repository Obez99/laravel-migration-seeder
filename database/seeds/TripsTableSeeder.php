<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            $randomNumber = rand(1, 5);
            global $minPrice;
            global $maxPrice;

            $newTrip = new Trip();
            $newTrip->name = $faker->word();
            $newTrip->description = $faker->text(400);
            $newTrip->destinations = $faker->words($randomNumber, true);

            //Generates random price based on number of destinations
            switch ($randomNumber) {
                case 1:
                    $minPrice = 50;
                    $maxPrice = 150;
                    break;

                case 2:
                    $minPrice = 500;
                    $maxPrice = 1000;
                    break;

                case 3:
                    $minPrice = 1500;
                    $maxPrice = 2000;
                    break;

                case 4:
                    $minPrice = 2300;
                    $maxPrice = 3000;
                    break;

                case 5:
                    $minPrice = 3200;
                    $maxPrice = 3500;
                    break;
            }

            $newTrip->price = $faker->numberBetween($minPrice, $maxPrice);
            $newTrip->image = $faker->imageUrl(640, 480, "travel");
            $newTrip->save();
        }
    }
}
