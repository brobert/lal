<?php
use Illuminate\Database\Seeder;
// use CountrySeeder;
// use TimeZoneSeeder;
// use LanguageSeeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//     	$this->call( UserSeeder::class );
    	$this->call( TimeZoneSeeder::class );
    	$this->call( CountrySeeder::class );
    	$this->call( GeoIpCountrySeeder::class );
    }
}
