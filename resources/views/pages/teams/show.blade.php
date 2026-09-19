@extends('layouts.app')

@section('title', $team->name . ' | Mpumalanga Basketball')

@section('content')

<div class="team-details-container">

    <div class="team-details-card">

        {{-- Team Logo --}}
        <div class="team-details-logo">

            @if($team->team_logo)

                <img
                    src="{{ asset('storage/' . $team->team_logo) }}"
                    alt="{{ $team->name }} Logo"
                    class="team-details-image"
                >

            @else

                <div class="team-details-placeholder">
                    🏀
                </div>

            @endif

        </div>

        {{-- Team Information --}}
        <div class="team-details-info">

            <h1>{{ $team->name }}</h1>

            @if($team->short_name)
                <span class="team-details-short-name">
                    {{ $team->short_name }}
                </span>
            @endif

            <div class="team-details-section">

                <h2>Team Information</h2>

                <p>
                    <strong>District:</strong>
                    {{ $team->district->name }}
                </p>

                <p>
                    <strong>Team Type:</strong>
                    {{ $team->team_type }}
                </p>

            </div>

            <div class="team-details-section">

                <h2>Contact Information</h2>

                @if($team->contact_person)
                    <p>
                        <strong>Coach / Manager:</strong>
                        {{ $team->contact_person }}
                    </p>
                @endif

                @if($team->contact_number)
                    <p>
                        <strong>Phone:</strong>
                        {{ $team->contact_number }}
                    </p>
                @endif

                @if($team->email)
                    <p>
                        <strong>Email:</strong>
                        {{ $team->email }}
                    </p>
                @endif

            </div>
            <div class="team-details-section">

    <h2>Players</h2>

    @if($players->count() > 0)

            <div class="team-players-list">

                @foreach($players as $player)

                    <div class="team-player">

                        @if($player->profile_photo)

                            <img
                                src="{{ asset('storage/' . $player->profile_photo) }}"
                                alt="{{ $player->first_name }} {{ $player->surname }}"
                                class="team-player-photo"
                            >

                        @else

                            <div class="team-player-placeholder">
                                👤
                            </div>

                        @endif

                        <div class="team-player-info">

                            <h3>
                                {{ $player->first_name }}
                                {{ $player->surname }}
                            </h3>

                            <p>
                                <strong>Position:</strong>
                                {{ $player->position }}
                            </p>

                            <p>
                                <strong>Age Category:</strong>
                                {{ $player->age_category }}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <p>No players are currently registered to this team.</p>

        @endif

    </div>

            <div class="team-details-actions">

                <a href="{{ url('/teams') }}" class="btn-secondary">
                    ← Back to Teams
                </a>

            </div>

        </div>

    </div>

</div>

@endsection