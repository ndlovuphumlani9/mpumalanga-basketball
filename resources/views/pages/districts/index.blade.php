@extends('layouts.app')

@section('title', 'Districts | Mpumalanga Basketball')

@section('content')

<div class="districts-container">

    <div class="districts-header">
        <h1>Mpumalanga Basketball Districts</h1>
        <p>Explore the basketball leagues across Mpumalanga.</p>
    </div>

    <div class="districts-grid">

        @foreach($districts as $district)

            <div class="district-card">

                <div class="district-icon">
                    🏀
                </div>

                <h2>{{ $district->name }}</h2>

                @if($district->short_name)
                    <div class="district-short-name">
                        {{ $district->short_name }}
                    </div>
                @endif

                <p>
                    Basketball league serving players, teams and coaches
                    within this district.
                </p>

                <a href="{{ url('/player/register') }}" class="btn-primary">
                    Register a Player
                </a>

            </div>

        @endforeach

    </div>

</div>

@endsection