@extends('layouts.app')

@section('title', 'Register Team | Mpumalanga Basketball')

@section('content')

<div class="form-container">

    <div class="form-header">
        <h1>Register a Basketball Team</h1>
        <p>Add a team to the Mpumalanga Basketball system.</p>
    </div>

    @if($errors->any())
        <div class="error-alert">
            <strong>Please correct the following:</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/teams') }}" method="POST" enctype="multipart/form-data" class="registration-form">

        @csrf

        <h2>Team Information</h2>

        <div class="form-group">
            <label for="name">Team Name *</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="e.g. Breyten Basketball Club"
                required
            >
        </div>

        <div class="form-group">
            <label for="short_name">Short Name</label>
            <input
                type="text"
                id="short_name"
                name="short_name"
                value="{{ old('short_name') }}"
                placeholder="e.g. BBC"
            >
        </div>

            <div class="form-group">

            <label for="team_logo">Team Logo / Picture</label>

            <input
                type="file"
                id="team_logo"
                name="team_logo"
                accept=".jpg,.jpeg,.png,.webp"
            >

            <small>
                Upload a team logo or team picture. Maximum size: 2MB.
            </small>

        </div>

        <div class="form-group">
            <label for="district_id">District *</label>

            <select id="district_id" name="district_id" required>

                <option value="">Select District</option>

                @foreach($districts as $district)
                    <option
                        value="{{ $district->id }}"
                        {{ old('district_id') == $district->id ? 'selected' : '' }}
                    >
                        {{ $district->name }}
                        @if($district->short_name)
                            ({{ $district->short_name }})
                        @endif
                    </option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="team_type">Team Type *</label>

            <select id="team_type" name="team_type" required>

                <option value="">Select Team Type</option>

                <option value="Club" {{ old('team_type') == 'Club' ? 'selected' : '' }}>
                    Club
                </option>

                <option value="School" {{ old('team_type') == 'School' ? 'selected' : '' }}>
                    School
                </option>

                <option value="Academy" {{ old('team_type') == 'Academy' ? 'selected' : '' }}>
                    Academy
                </option>

            </select>
        </div>

        <h2>Team Contact Information</h2>

        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input
                type="text"
                id="contact_person"
                name="contact_person"
                value="{{ old('contact_person') }}"
                placeholder="Coach or Team Manager"
            >
        </div>

        <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input
                type="text"
                id="contact_number"
                name="contact_number"
                value="{{ old('contact_number') }}"
                placeholder="e.g. 0821234567"
            >
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="team@example.com"
            >
        </div>

        <div class="form-actions">

            <a href="{{ url('/teams') }}" class="btn-secondary">
                Cancel
            </a>

            <button type="submit" class="btn-primary">
                Register Team
            </button>

        </div>

    </form>

</div>

@endsection