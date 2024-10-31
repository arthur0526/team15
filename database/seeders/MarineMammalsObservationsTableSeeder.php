<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class MarineMammalsObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
    $years = range(98, 111);
    for ($i = 0; $i < count($years); $i++) 
    {
        $solar_power = rand(9 * 100, 10677 * 100) / 100;          
        $wind_power = rand(786 * 100, 3543 * 100) / 100;
        $hydro_power = rand(3748 * 100, 5846 * 100) / 100;
        $biomass_power = rand(158 * 100, 270 * 100) / 100;
        $geothermal_power = rand(8 * 100, 25 * 100) / 100;
        $waste_power = rand(3036 * 100, 3605 * 100) / 100;
        $total_power = $solar_power + $wind_power + $hydro_power + $biomass_power + $geothermal_power + $waste_power;
        DB::table('marine_mammals_observations')->insert([
            'year' => $years[$i],
            'solar_power' => $solar_power,
            'wind_power' => $wind_power,
            'hydro_power' => $hydro_power,
            'biomass_power' => $biomass_power,
            'geothermal_power' => $geothermal_power,
            'waste_power' => $waste_power,
            'total_power' => $total_power,
            'created_at' => $random_datetime,
            'updated_at' => $random_datetime,
        ]);
    }          
  }
}
