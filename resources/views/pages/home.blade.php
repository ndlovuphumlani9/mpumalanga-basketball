@extends('layouts.app')

@section('title', 'Home | Mpumalanga Basketball')

@section('content')

<section class="hero">

    <div class="hero-content">

        <h1>
            MPUMALANGA <span>BASKETBALL</span>
        </h1>

        <p>
            Connecting players, teams and basketball communities
            across Mpumalanga.
        </p>

        <a href="{{ url('/player/register') }}" class="btn">
            REGISTER AS A PLAYER
        </a>

    </div>

</section>

<section class="section">

    <h2>Our Districts</h2>

    <p class="section-intro">
        Basketball communities across Mpumalanga.
    </p>

    <div class="cards">

        <div class="card">
            <h3>Gert Sibande</h3>
            <p>Gert Sibande Basketball League</p>
        </div>

        <div class="card">
            <h3>Nkangala</h3>
            <p>Nkangala Basketball League</p>
        </div>

        <div class="card">
            <h3>Ehlanzeni</h3>
            <p>Ehlanzeni Basketball League</p>
        </div>

    </div>

</section>

<section class="section">

    <h2>Age Categories</h2>

    <div class="cards">

        <div class="card age-card">
            <h3>U13</h3>
            <p>Junior development</p>
        </div>

        <div class="card age-card">
            <h3>U16</h3>
            <p>Youth development</p>
        </div>

        <div class="card age-card">
            <h3>U18</h3>
            <p>Junior competitive basketball</p>
        </div>

        <div class="card age-card">
            <h3>Seniors</h3>
            <p>Senior basketball</p>
        </div>

    </div>

</section>

@endsection