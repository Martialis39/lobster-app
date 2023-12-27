<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commute; // Model are singular, tables are plural

class CommuteController extends Controller
{
    /**
     * Show the form to create a new commute.
     *
     * @return \Illuminate\View\View
     */
    public function createForm()
    {
        return view('commute.create');
    }

    /**
     * Store a new commute in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'start_destination_id' => 'required|numeric',
            'end_destination_id' => 'required|numeric',
            'distance' => 'required|numeric',
            'fuel_consumed' => 'required|numeric',
            'duration_seconds' => 'required|numeric',
            // Add other validation rules as needed
        ]);

        // Create a new Commute instance
        $commute = new Commute();
        $commute->start_destination_id = $request->input('start_destination_id');
        $commute->end_destination_id = $request->input('end_destination_id');
        $commute->distance = $request->input('distance');
        $commute->fuel_consumed = $request->input('fuel_consumed');
        $commute->duration_seconds = $request->input('duration_seconds');


        // Save the Commute instance to the database
        $commute->save();

        return redirect()->route('commute.index')->with('success', 'Commute created successfully');
    }
}
