@extends('layouts.app')

@section('title', 'Registration Successful | Mpumalanga Basketball')

@section('content')

<div class="success-container">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Registration Successful!</h1>

        <p class="success-message">
            The player has been successfully registered with Mpumalanga Basketball.
        </p>

        <div class="registration-details">
            <h2>Player Details</h2>

            <p>
                <strong>Name:</strong>
                {{ $player->first_name }} {{ $player->surname }}
            </p>

            <p>
                <strong>Age Category:</strong>
                {{ $player->age_category }}
            </p>

            <p>
                <strong>District:</strong>
                {{ $player->district }}
            </p>

            <p>
                <strong>Position:</strong>
                {{ $player->position }}
            </p>

            @if($player->current_team)
                <p>
                    <strong>Team:</strong>
                    {{ $player->current_team }}
                </p>
            @endif
        </div>

        @if($player->profile_photo)
            <div class="player-photo">
                <img
                    src="{{ asset('storage/' . $player->profile_photo) }}"
                    alt="Player Profile Photo"
                >
            </div>
        @endif

        <div class="success-actions">
            <a href="{{ url('/player/register') }}" class="btn-primary">
                Register Another Player
            </a>

            <a href="{{ url('/') }}" class="btn-secondary">
                Back to Home
            </a>
        </div>

    </div>

</div>

@endsection