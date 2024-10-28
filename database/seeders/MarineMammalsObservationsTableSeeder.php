<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MarineMammalsObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marine_mammals_observations')->insert( [
            ['year' => 98, 'solar_power' => 9.1, 'wind_power' => 786.6, 'hydro_power' => 3748.3, 'biomass_power' => 229.3, 'geothermal_power' => null, 'waste_power' => 3036.1, 'total_power' => 7809.5, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 99, 'solar_power' => 21.7, 'wind_power' => 1026.3, 'hydro_power' => 4194.1, 'biomass_power' => 270, 'geothermal_power' => null, 'waste_power' => 3127.6, 'total_power' => 8639.8, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 100, 'solar_power' => 61.6, 'wind_power' => 1492.7, 'hydro_power' => 3999.7, 'biomass_power' => 236.1, 'geothermal_power' => null, 'waste_power' => 3196.9, 'total_power' => 8987.1, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 101, 'solar_power' => 159.9, 'wind_power' => 1413.5, 'hydro_power' => 5669.6, 'biomass_power' => 241.5, 'geothermal_power' => null, 'waste_power' => 3177.7, 'total_power' => 10662.1, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 102, 'solar_power' => 321.1, 'wind_power' => 1640, 'hydro_power' => 5422.9, 'biomass_power' => 225.6, 'geothermal_power' => null, 'waste_power' => 3245.7, 'total_power' => 10855.2, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 103, 'solar_power' => 528.8, 'wind_power' => 1500.5, 'hydro_power' => 4317.9, 'biomass_power' => 249.8, 'geothermal_power' => null, 'waste_power' => 3325.5, 'total_power' => 9922.4, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 104, 'solar_power' => 850.3, 'wind_power' => 1525.2, 'hydro_power' => 4470.1, 'biomass_power' => 246.2, 'geothermal_power' => null, 'waste_power' => 3384.2, 'total_power' => 10476, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 105, 'solar_power' => 1109, 'wind_power' => 1457.1, 'hydro_power' => 6562, 'biomass_power' => 205.4, 'geothermal_power' => null, 'waste_power' => 3396.6, 'total_power' => 12730.1, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 106, 'solar_power' => 1667.5, 'wind_power' => 1722.5, 'hydro_power' => 5446.8, 'biomass_power' => 187.7, 'geothermal_power' => null, 'waste_power' => 3341, 'total_power' => 12365.4, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 107, 'solar_power' => 2703.7, 'wind_power' => 1709.5, 'hydro_power' => 4481.6, 'biomass_power' => 185.3, 'geothermal_power' => null, 'waste_power' => 3566.6, 'total_power' => 12646.6, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 108, 'solar_power' => 4015.9, 'wind_power' => 1892.2, 'hydro_power' => 5544.8, 'biomass_power' => 169.8, 'geothermal_power' => 0.8, 'waste_power' => 3634.9, 'total_power' => 15258.4, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 109, 'solar_power' => 6074.7, 'wind_power' => 2308.9, 'hydro_power' => 3019.2, 'biomass_power' => 204.7, 'geothermal_power' => 1.9, 'waste_power' => 3569.7, 'total_power' => 15179.1, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 110, 'solar_power' => 7970.2, 'wind_power' => 2257.5, 'hydro_power' => 3474.7, 'biomass_power' => 195.8, 'geothermal_power' => 9.1, 'waste_power' => 3604.5, 'total_power' => 17511.7, 'created_at' => now(), 'updated_at' => now()],
            ['year' => 111, 'solar_power' => 10677, 'wind_power' => 3543.1, 'hydro_power' => 5836.5, 'biomass_power' => 158.2, 'geothermal_power' => 25, 'waste_power' => 3605.1, 'total_power' => 23844.9, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
