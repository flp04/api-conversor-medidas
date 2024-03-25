<?php

namespace App\Http\Controllers;

use App\Models\Grandeza;
use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeMedidaController extends Controller
{
    public static function unidades () {
        return Unidade::all();
    }

    public static function converter($grandeza, $unidadeorigem, $unidadedestino) {
        if (self::verificarGrandezas($unidadeorigem, $unidadedestino)) {
            $convertido_valor_referencia = $grandeza / Unidade::where('simbolo', $unidadeorigem)->orWhere('nome', $unidadeorigem)->value('valor_referencia');
            return json_encode(
                [
                    'grandeza' => Grandeza::find(Unidade::where('simbolo', $unidadedestino)->orWhere('nome', $unidadedestino)->value('grandeza_id'))->value('nome'),
                    'valor_origem' => $grandeza,
                    'unidade_origem' => Unidade::where('simbolo', $unidadeorigem)->orWhere('nome', $unidadeorigem)->value('nome'),
                    'valor_convertido' => $convertido_valor_referencia * Unidade::where('simbolo', $unidadedestino)->orWhere('nome', $unidadedestino)->value('valor_referencia'),
                    'unidade_destino' => Unidade::where('simbolo', $unidadedestino)->orWhere('nome', $unidadedestino)->value('nome'),
                ]
            );
        } else {
            return 'grandezas diferentes';
        }
    }

    public static function verificarGrandezas($unidadeorigem, $unidadedestino) {
        if (Unidade::where('simbolo', $unidadeorigem)->orWhere('nome', $unidadeorigem)->value('grandeza_id') == Unidade::where('simbolo', $unidadedestino)->orWhere('nome', $unidadedestino)->value('grandeza_id')) {
            return true;
        } else {
            return false;
        }
    }
}
