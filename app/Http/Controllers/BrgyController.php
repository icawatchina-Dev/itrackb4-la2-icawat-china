<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrgyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $allBrgys = collect($this->barangays());
        $municipalities = $allBrgys->pluck('municipality')->unique()->values();
        $municipality = $request->query('municipality', 'all');
        $populationGroup = $request->query('population_group', 'all');

        $brgys = $allBrgys;

        if ($municipality !== 'all') {
            $brgys = $brgys->filter(
                fn (array $brgy) => strcasecmp($brgy['municipality'], $municipality) === 0
            );
        }

        if ($populationGroup !== 'all') {
            $brgys = $brgys->filter(function (array $brgy) use ($populationGroup) {
                $population = $brgy['population'];

                return match ($populationGroup) {
                    'high' => $population !== null && $population >= 2500,
                    'lower' => $population !== null && $population < 2500,
                    'unavailable' => $population === null,
                    default => false,
                };
            });
        }

        return view('brgys.index', [
            'brgys' => $brgys->values(),
            'municipalities' => $municipalities,
            'selectedMunicipality' => $municipality,
            'selectedPopulationGroup' => $populationGroup,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brgy = collect($this->barangays())->firstWhere('id', (int) $id);

        abort_unless($brgy, 404);

        return view('brgys.show', ['brgy' => $brgy]);
    }

    private function barangays(): array
    {
        return [
            ['id' => 1, 'name' => 'San Isidro Village', 'municipality' => 'Virac', 'population' => 1250],
            ['id' => 2, 'name' => 'Calatagan', 'municipality' => 'Virac', 'population' => 4200],
            ['id' => 3, 'name' => 'Cavinitan', 'municipality' => 'Virac', 'population' => 3959],
            ['id' => 4, 'name' => 'San Andres Proper', 'municipality' => 'San Andres', 'population' => 2000],
            ['id' => 5, 'name' => 'Codon', 'municipality' => 'San Andres', 'population' => 1881],
            ['id' => 6, 'name' => 'Sabangan', 'municipality' => 'Bagamanoc', 'population' => 1500],
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
