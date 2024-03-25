<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Seeder;

class UnidadeSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            //area
            ['grandeza_id' => 1, 'nome' => 'centimetro quadrado', 'simbolo' => 'cm2'],
            ['grandeza_id' => 1, 'nome' => 'metro quadrado', 'simbolo' => 'm2'],
            ['grandeza_id' => 1, 'nome' => 'quilometro quadrado', 'simbolo' => 'km2'],
            ['grandeza_id' => 1, 'nome' => 'hectare', 'simbolo' => 'ha'],
            
            //comprimento
            ['grandeza_id' => 2, 'nome' => 'milimetro', 'simbolo' => 'mm'],
            ['grandeza_id' => 2, 'nome' => 'centimetro', 'simbolo' => 'cm'],
            ['grandeza_id' => 2, 'nome' => 'metro', 'simbolo' => 'm'],
            ['grandeza_id' => 2, 'nome' => 'quilometro', 'simbolo' => 'km'],
            ['grandeza_id' => 2, 'nome' => 'milha', 'simbolo' => 'mi'],
            
            //massa
            ['grandeza_id' => 3, 'nome' => 'miligrama', 'simbolo' => 'mg'],
            ['grandeza_id' => 3, 'nome' => 'grama', 'simbolo' => 'g'],
            ['grandeza_id' => 3, 'nome' => 'quilograma', 'simbolo' => 'kg'],
            ['grandeza_id' => 3, 'nome' => 'tonelada', 'simbolo' => 't'],

            //temperatura
            ['grandeza_id' => 4, 'nome' => 'Celsius', 'simbolo' => 'c'],
            ['grandeza_id' => 4, 'nome' => 'Farenheit', 'simbolo' => 'f'],
            ['grandeza_id' => 4, 'nome' => 'Kelvin', 'simbolo' => 'k'],

            //tempo
            ['grandeza_id' => 5, 'nome' => 'segundo', 'simbolo' => 's'],
            ['grandeza_id' => 5, 'nome' => 'minuto', 'simbolo' => 'm'],
            ['grandeza_id' => 5, 'nome' => 'hora', 'simbolo' => 'h'],
            ['grandeza_id' => 5, 'nome' => 'dia', 'simbolo' => 'dia'],
            ['grandeza_id' => 5, 'nome' => 'mes', 'simbolo' => 'mes'],
            ['grandeza_id' => 5, 'nome' => 'ano', 'simbolo' => 'ano'],

            //volume
            ['grandeza_id' => 6, 'nome' => 'mililitro', 'simbolo' => 'ml'],
            ['grandeza_id' => 6, 'nome' => 'litro', 'simbolo' => 'l'],
            ['grandeza_id' => 6, 'nome' => 'centimetro cubico', 'simbolo' => 'cm3'],
            ['grandeza_id' => 6, 'nome' => 'metro cubico', 'simbolo' => 'm3'],
        ];
        
        foreach ($unidades as $unidade) {
            Unidade::firstOrCreate($unidade);
        }
    }
}
