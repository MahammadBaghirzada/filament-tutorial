<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::query()->insert([
            ['name' => 'Azerbaijan', 'code' => 'AZ', 'phonecode' => 994, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
