<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\Country::factory(10)->create();
        \App\Models\Region::factory(10)->create();
        \App\Models\City::factory(10)->create();
        \App\Models\Restaraun::factory(10)->create();
        \App\Models\Menu::factory(10)->create();
        \App\Models\Food::factory(10)->create();

        // $country = Country::create([
        //     "name"=>'Uzbekistan'
        // ]);
        // $regions1 = $country->regions()->create([
        //     "name"=>"Tashkent"
        // ]);
        // $regions2 = $country->regions()->create([
        //     "name"=>"Samarkand"
        // ]);
        // $regions3 = $country->regions()->create([
        //     "name"=>"Karakalpakstan"
        // ]);
        // $city1 = $regions3->cities()->create([
        //     'name'=>"Nukus"
        // ]);
        // $city2 = $regions3->cities()->create([
        //     'name'=>"Chimbay"
        // ]);
        // $city3 = $regions1->cities()->create([
        //     'name'=>"Tashkent"
        // ]);
        // $city4 = $regions1->cities()->create([
        //     'name'=>"Yunusobod"
        // ]);
        // $city5 = $regions2->cities()->create([
        //     'name'=>"Samarkand"
        // ]);
        // $city6 = $regions2->cities()->create([
        //     'name'=>"Angren"
        // ]);

    }
}
