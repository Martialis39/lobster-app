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
            'start_destination' => 'required|string',
            'end_destination' => 'required|string',
            'distance' => 'required|numeric',
            'fuel_consumed' => 'required|numeric',
            'duration' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Create a new Commute instance
        $commute = new Commute();
        $commute->start_destination = $request->input('start_destination');
        $commute->end_destination = $request->input('end_destination');
        $commute->distance = $request->input('distance');
        $commute->fuel_consumed = $request->input('fuel_consumed');
        $commute->duration = $request->input('duration');


        // Save the Commute instance to the database
        $commute->save();

        return redirect()->route('commute.index')->with('success', 'Commute created successfully');
    }
}
