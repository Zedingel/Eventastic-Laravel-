<?php

namespace App\Http\Controllers;

use App\Mail\EventBookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'occasion' => 'required|string',
            'guests' => 'required|string',
            'event_date' => 'required|date',
            'time_of_day' => 'required|string',
            'email' => 'required|email', // Ensure email is included and valid
        ]);

        // Proceed with sending the email after validation
        $eventData = $request->all(); // Get all the form data

        // Send the email
        Mail::to($request->email)->send(new EventBookingMail($eventData));

        // Return a response or redirect
        return redirect()->back()->with('success', 'Event booked successfully. Check your email for details.');
    }


}
