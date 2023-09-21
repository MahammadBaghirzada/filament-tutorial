<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::query()->insert([
            ['name' => 'Bakı', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bakıxanov', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Balaxanı', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biləcəri', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bilgəh', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Binə', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Buzovna', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Əhmədli', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hövsan', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lökbatan', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maştağa', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Qaraçuxur', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Xırdalan', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sumqayıt', 'state_id' => 1, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
