@extends('layouts.app')

@section('title', 'Player Registration | Mpumalanga Basketball')

@section('content')

<section class="registration-section">

    <div class="registration-container">

        <div class="registration-header">
            <h1>Player Registration</h1>

            <p>
                Register as a basketball player in Mpumalanga.
                Complete your information below.
            </p>
        </div>


        <form action="{{ url('/player/register') }}" method="POST" enctype="multipart/form-data">
        @csrf

                @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please fix the following:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            <!-- Personal Information -->

            <div class="form-section">

                <h2>Personal Information</h2>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="first_name">First Name</label>

                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            placeholder="Enter your first name"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="surname">Surname</label>

                        <input
                            type="text"
                            id="surname"
                            name="surname"
                            placeholder="Enter your surname"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>

                        <input
                            type="date"
                            id="date_of_birth"
                            name="date_of_birth"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="gender">Gender</label>

                        <select id="gender" name="gender" required>

                            <option value="">
                                Select gender
                            </option>

                            <option value="male">
                                Male
                            </option>

                            <option value="female">
                                Female
                            </option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>

                        <input
                            type="tel"
                            id="contact_number"
                            name="contact_number"
                            placeholder="Enter your contact number"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="email">Email Address</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email address"
                        >
                    </div>

                </div>

            </div>


            <!-- Basketball Information -->

            <div class="form-section">

                <h2>Basketball Information</h2>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="position">Playing Position</label>

                        <select id="position" name="position" required>

                            <option value="">
                                Select position
                            </option>

                            <option value="point_guard">
                                Point Guard
                            </option>

                            <option value="shooting_guard">
                                Shooting Guard
                            </option>

                            <option value="small_forward">
                                Small Forward
                            </option>

                            <option value="power_forward">
                                Power Forward
                            </option>

                            <option value="center">
                                Center
                            </option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="age_category">
                            Age Category
                        </label>

                        <select
                            id="age_category"
                            name="age_category"
                            required
                        >

                            <option value="">
                                Select age category
                            </option>

                            <option value="u13">U13</option>
                            <option value="u16">U16</option>
                            <option value="u18">U18</option>
                            <option value="seniors">Seniors</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="district">District *</label>

                        <select id="district" name="district" required>
                            <option value="">Select District</option>

                            @foreach($districts as $district)
                                <option
                                    value="{{ $district->name }}"
                                    {{ old('district') == $district->name ? 'selected' : '' }}
                                >
                                    {{ $district->name }}
                                   
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                    <label for="current_team">Current Team</label>

                    <select id="current_team" name="current_team">
                        <option value="">Select Team</option>

                        @foreach($teams as $team)
                            <option
                                value="{{ $team->name }}"
                                data-district="{{ $team->district->name }}"
                                {{ old('current_team') == $team->name ? 'selected' : '' }}
                            >
                                {{ $team->name }}
                            </option>
                        @endforeach
                    </select>
                    </div>

                </div>

            </div>


            <!-- Emergency Contact -->

            <div class="form-section">

                <h2>Emergency Contact</h2>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="emergency_contact_name">
                            Emergency Contact Name
                        </label>

                        <input
                            type="text"
                            id="emergency_contact_name"
                            name="emergency_contact_name"
                            placeholder="Full name"
                            required
                        >
                    </div>


                    <div class="form-group">
                        <label for="emergency_contact_number">
                            Emergency Contact Number
                        </label>

                        <input
                            type="tel"
                            id="emergency_contact_number"
                            name="emergency_contact_number"
                            placeholder="Contact number"
                            required
                        >
                    </div>

                </div>

            </div>


            <!-- Profile Photo -->

            <div class="form-section">

                <h2>Profile Photo</h2>

                <div class="form-group">

                    <label for="profile_photo">
                        Upload Profile Photo
                    </label>

                    <input
                        type="file"
                        id="profile_photo"
                        name="profile_photo"
                        accept="image/*"
                    >

                </div>

            </div>


            <!-- Submit -->

            <div class="form-submit">

                <button type="submit">
                    Submit Registration
                </button>

            </div>

        </form>

    </div>

</section>

<script>
    const districtSelect = document.getElementById('district');
    const teamSelect = document.getElementById('current_team');

    function filterTeams() {
        const selectedDistrict = districtSelect.value;

        Array.from(teamSelect.options).forEach(option => {

            if (option.value === '') {
                option.hidden = false;
                return;
            }

            const teamDistrict = option.dataset.district;

            option.hidden = selectedDistrict !== '' &&
                            teamDistrict !== selectedDistrict;
        });

        // Reset team selection when district changes
        if (
            teamSelect.value !== '' &&
            teamSelect.selectedOptions[0].hidden
        ) {
            teamSelect.value = '';
        }
    }

    districtSelect.addEventListener('change', filterTeams);

    // Run once when the page loads
    filterTeams();
</script>

@endsection