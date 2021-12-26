<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Seeder;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Market::create([
            'name' => 'CRYPTO IDX',
            'candle' => 'binomo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Market::create([
            'name' => 'GBP/USD',
            'candle' => 'gbp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Market::create([
            'name' => 'EUR/USD',
            'candle' => 'eur',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Market::create([
            'name' => 'ALTCOIN IDX',
            'candle' => 'alt',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
