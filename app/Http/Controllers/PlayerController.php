<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Models\Team;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::latest()->get();

        return view('pages.player.index', compact('players'));
    }

    public function create()
    {
        $districts = District::orderBy('name')->get();

        $teams = Team::with('district')
            ->orderBy('name')
            ->get();

        return view('pages.player.register', compact('districts', 'teams'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'contact_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',

            'position' => 'required|string',
            'age_category' => 'required|string',
            'district' => 'required|string',
            'current_team' => 'nullable|string|max:255',

            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_number' => 'required|string|max:20',

            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('profile_photo')) {
            $validated['profile_photo'] =
                $request->file('profile_photo')->store('players', 'public');
        }

        $player = Player::create($validated);

        return view('pages.player.success', compact('player'));
    }
}