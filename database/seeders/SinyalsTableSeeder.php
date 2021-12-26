<?php

namespace Database\Seeders;

use App\Models\Sinyal;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SinyalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $a = array ('BUY', 'SELL');
        $op = array ('1 Min', '5 Min', '15 min', '30 Min');

        for($i = 1; $i <= 300; $i++)
        {
            Sinyal::create([
                'market_id' => rand(1, 4),
                'signal' => $a[array_rand($a)],
                'waktu' => date('H:i', rand(1,54000)),
                'open'=> $op[array_rand($op)]
            ]);
        }
    }
}
