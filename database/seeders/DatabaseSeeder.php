<?php

namespace Database\Seeders;

use App\Models\County;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        County::factory()->create([
            'name' => 'Pest',
        ]);
        County::factory()->create([
            'name' => 'Csongrád',
        ]);
        County::factory()->create([
            'name' => 'Bács-Kiskun',
        ]);
        County::factory()->create([
            'name' => 'Baranya',
        ]);
        County::factory()->create([
            'name' => 'Békés',
        ]);
        County::factory()->create([
            'name' => 'Borsod-Abaúj-Zemplén',
        ]);
        County::factory()->create([
            'name' => 'Fejér',
        ]);
        County::factory()->create([
            'name' => 'Győr-Moson-Sopron',
        ]);
        County::factory()->create([
            'name' => 'Hajdú-Bihar',
        ]);
        County::factory()->create([
            'name' => 'Heves',
        ]);
        County::factory()->create([
            'name' => 'Jász-Nagykun-Szolnok',
        ]);
        County::factory()->create([
            'name' => 'Komárom-Esztergom',
        ]);
        County::factory()->create([
            'name' => 'Somogy',
        ]);
        County::factory()->create([
            'name' => 'Szabolcs-Szatmár-Bereg',
        ]);
        County::factory()->create([
            'name' => 'Tolna',
        ]);
        County::factory()->create([
            'name' => 'Vas',
        ]);
        County::factory()->create([
            'name' => 'Veszprém',
        ]);
        County::factory()->create([
            'name' => 'Zala',
        ]);
        County::factory()->create([
            'name' => 'Nógrád',
        ]);
    }
}
