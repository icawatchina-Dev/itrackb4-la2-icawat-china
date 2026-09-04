<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BrgysController;
use Illuminate\Http\Request;
class BrgyController extends Controller
{    public function index(){   
        $brgys = [
            ['name' => 'Hawan', 'municipality' => 'Virac', 'population' => 2500, ],
            ['name' => 'Calatagan', 'municipality' => 'Virac', 'population' => 4200, ],
            ['name' => 'Salvacion', 'municipality' => 'Bato', 'population' => 1800, ],
            ['name' => 'Bagawang', 'municipality' => 'Pandan', 'population' => 1500, ],
            ['name' => 'San Jose', 'municipality' => 'Viga', 'population' => 2100, ],
        ]; 
        return view('brgys.index', ['brgys' => $brgys]);
    }
}
Route::get('/brgys', [BrgyController::class, 'index']);
