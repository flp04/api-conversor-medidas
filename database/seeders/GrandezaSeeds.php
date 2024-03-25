<?php

namespace Database\Seeders;

use App\Models\Grandeza;
use Illuminate\Database\Seeder;

class GrandezaSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grandezas = [
            ['nome' => 'area'],
            ['nome' => 'comprimento'],
            ['nome' => 'massa'],
            ['nome' => 'temperatura'],
            ['nome' => 'tempo'],
            // ['nome' => 'velocidade?'],
            ['nome' => 'volume'],
        ];

        foreach ($grandezas as $grandeza) {
            Grandeza::firstOrCreate($grandeza);
        }
    }
}
