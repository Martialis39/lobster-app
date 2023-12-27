<!-- resources/views/commute/create.blade.php -->

@extends('layouts.one-column')

@section('content')
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h2>Create a New Commute</h2>
                <form method="POST" action="{{ route('commute.store') }}">
                    @csrf
                    <!-- Form fields go here -->
                    <div class="row">
                        <div class="six columns">
                            <label for="start_destination">Start Destination</label>
                            <input type="text" name="start_destination" id="start_destination" class="u-full-width" required>
                        </div>
                        <div class="six columns">
                            <label for="end_destination">End Destination</label>
                            <input type="text" name="end_destination" id="end_destination" class="u-full-width" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <label for="distance">Distance</label>
                            <input type="number" name="distance" id="distance" class="u-full-width" required>
                        </div>
                        <div class="six columns">
                            <label for="fuel_consumed">Fuel Consumed</label>
                            <input type="number" name="fuel_consumed" id="fuel_consumed" class="u-full-width" required>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset>
                        <legend>Duration</legend>
                        <div class="twelve columns">
                            <!-- Hours -->
                            <div class="three columns"> 
                                <label for="durations_hours">Hours</label>
                                <input type="number" name="durations_hours" id="durations_hours" class="u-full-width">
                            </div>
                            <!-- Minutes -->
                            <div class="three columns"> 
                                <label for="durations_minutes">Minutes</label>
                                <input type="number" name="durations_minutes" id="durations_minutes" class="u-full-width" required>
                            </div>
                            
                        </div>
                        </fieldset>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <button type="submit" class="button-primary">Create Commute</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
`