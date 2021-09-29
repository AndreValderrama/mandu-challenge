<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Division as GlobalDivision;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::paginate();
        return view('division.index', compact('divisions'));
    }
    public function create()
    {
        return view('division.create');
    }

    public function store(Request $request)
    {
        $division  = new Division();
        $division->name = $request->name;
        $division->divsup = $request->divsup;
        $division->colab = $request->colab;
        $division->level = $request->level;
        $division->embajador = $request->embajador;
        $division->save();
    }
    public function show()
    {
    }
    public function edit()
    {
    }
    public function delete()
    {
    }
}
