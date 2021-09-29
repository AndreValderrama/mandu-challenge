<?php

namespace App\Http\Controllers;

use App\Models\Division;
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
