<!-- resources/views/commute/create.blade.php -->

@extends('layouts.one-column')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Commute</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('commute.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="start_destination">Start Destination</label>
                                <input type="text" name="start_destination" id="start_destination" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="end_destination">End Destination</label>
                                <input type="text" name="end_destination" id="end_destination" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="distance">Distance</label>
                                <input type="number" name="distance" id="distance" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="fuel_consumed">Fuel Consumed</label>
                                <input type="number" name="fuel_consumed" id="fuel_consumed" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" id="duration" class="form-control" required>
                            </div>

                            <!-- Add other form fields as needed -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Commute</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
