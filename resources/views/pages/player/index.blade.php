@extends('layouts.app')

@section('title', 'Registered Players | Mpumalanga Basketball')

@section('content')

<div class="players-container">

    <div class="players-header">
        <h1>Registered Players</h1>
        <p>Players registered with Mpumalanga Basketball.</p>
    </div>

    @if($players->count() > 0)

        <div class="players-grid">

            @foreach($players as $player)

                <div class="player-card">

                    @if($player->profile_photo)
                        <img
                            src="{{ asset('storage/' . $player->profile_photo) }}"
                            alt="{{ $player->first_name }} {{ $player->surname }}"
                            class="player-photo"
                        >
                    @else
                        <div class="player-photo-placeholder">
                            No Photo
                        </div>
                    @endif

                    <div class="player-info">

                        <h2>
                            {{ $player->first_name }}
                            {{ $player->surname }}
                        </h2>

                        <p>
                            <strong>Position:</strong>
                            {{ $player->position }}
                        </p>

                        <p>
                            <strong>Age Category:</strong>
                            {{ $player->age_category }}
                        </p>

                        <p>
                            <strong>District:</strong>
                            {{ $player->district }}
                        </p>

                        @if($player->current_team)
                            <p>
                                <strong>Team:</strong>
                                {{ $player->current_team }}
                            </p>
                        @endif

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="no-players">
            <h2>No Players Registered Yet</h2>
            <p>There are currently no players in the system.</p>

            <a href="{{ url('/player/register') }}" class="btn-primary">
                Register a Player
            </a>
        </div>

    @endif

</div>

@endsection