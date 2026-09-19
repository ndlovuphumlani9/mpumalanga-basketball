<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Team;
use Illuminate\Http\Request;




class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('district')
            ->orderBy('name')
            ->get();

        return view('pages.teams.index', compact('teams'));
    }

    public function create()
    {
        $districts = District::orderBy('name')->get();

        return view('pages.teams.create', compact('districts'));
    }

            public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'short_name' => 'nullable|string|max:50',
                'team_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
                'district_id' => 'required|exists:districts,id',
                'team_type' => 'required|string|max:50',
                'contact_person' => 'nullable|string|max:255',
                'contact_number' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
            ]);

            if ($request->hasFile('team_logo')) {
                $validated['team_logo'] =
                    $request->file('team_logo')->store('teams', 'public');
            }

            Team::create($validated);

        return redirect('/teams')
            ->with('success', 'Team registered successfully.');
    }

    public function show(Team $team)
    {
        $team->load('district');

        $players = \App\Models\Player::where('current_team', $team->name)
            ->orderBy('first_name')
            ->get();

        return view('pages.teams.show', compact('team', 'players'));
    }
    
}

