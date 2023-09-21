<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::query()->insert([
            ['name' => 'Bakı', 'country_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
