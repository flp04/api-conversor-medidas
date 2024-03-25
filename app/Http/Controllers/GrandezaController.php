<?php

namespace App\Http\Controllers;

use App\Models\Grandeza;
use Illuminate\Http\Request;

class GrandezaController extends Controller
{
    public static function grandezas () {
        return Grandeza::all();
    }
}
