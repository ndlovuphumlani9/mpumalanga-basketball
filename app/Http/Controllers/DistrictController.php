<?php

namespace App\Http\Controllers;

use App\Models\District;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::orderBy('name')->get();

        return view('pages.districts.index', compact('districts'));
    }
}