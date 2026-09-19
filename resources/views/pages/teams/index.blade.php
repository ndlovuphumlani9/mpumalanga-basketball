@extends('layouts.app')

@section('title', 'Teams | Mpumalanga Basketball')

@section('content')

<div class="teams-container">

    <div class="teams-header">
        <div>
            <h1>Basketball Teams</h1>
            <p>Registered teams across the Mpumalanga Basketball districts.</p>
        </div>

        <a href="{{ url('/teams/create') }}" class="btn-primary">
            + Register Team
        </a>
    </div>

    @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
    @endif

    @if($teams->count() > 0)

        <div class="teams-grid">

            @foreach($teams as $team)

            <a href="{{ url('/teams/' . $team->id) }}" class="team-card team-card-link">

                @if($team->team_logo)
                    <img
                        src="{{ asset('storage/' . $team->team_logo) }}"
                        alt="{{ $team->name }} Logo"
                        class="team-logo"
                    >
                @else
                    <div class="team-icon">
                        🏀
                    </div>
                @endif

                <div class="team-info">

                    <h2>{{ $team->name }}</h2>

                    @if($team->short_name)
                        <span class="team-short-name">
                            {{ $team->short_name }}
                        </span>
                    @endif

                    <p>
                        <strong>District:</strong>
                        {{ $team->district->name }}
                    </p>

                    <p>
                        <strong>Team Type:</strong>
                        {{ $team->team_type }}
                    </p>

                    @if($team->contact_person)
                        <p>
                            <strong>Contact:</strong>
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

            </a>

            @endforeach

        </div>

    @else

        <div class="no-teams">

            <div class="team-icon">
                🏀
            </div>

            <h2>No Teams Registered Yet</h2>

            <p>
                There are currently no basketball teams in the system.
            </p>

            <a href="{{ url('/teams/create') }}" class="btn-primary">
                Register the First Team
            </a>

        </div>

    @endif

</div>

@endsection