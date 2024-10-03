<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class FormController extends Controller
{

    public function send(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Logic to send email (e.g., using Mail facade)
        // Mail::to('zedingelbeniyam@gmail.com')->send(new \App\Mail\ContactMail($validatedData));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Message successfully sent!');
    }

    public function showForm()
    {
        return view('form.show');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'occasion' => 'required',
            'guests' => 'required',
            'event_repeat' => 'required',
            'venue' => 'required',
            'event_date' => 'required|date',
            'time_of_day' => 'required',
            'event_duration' => 'required',
            'theme' => 'required',
            'decor' => 'required',
            'catering' => 'array',
            'budget' => 'required',
            'music' => 'required',
            'photo_entertainment' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'company' => 'nullable|string',
            'special_requests' => 'nullable|string',
            'access_requirements' => 'nullable|string',
            'dietary_restrictions' => 'nullable|string',
        ]);


        Session::put('eventData', $data);

        return redirect()->route('form.confirmation');
    }


    public function confirmation()
    {
        $data = Session::get('eventData');
        return view('form.confirmation', compact('data'));
    }


    public function download()
    {
        $data = Session::get('eventData');
        $pdf = FacadePdf::loadView('form.download', compact('data'));
        return $pdf->download('confirmation.pdf');
    }

//     public function download(Request $request)
// {
//     $data = $request->session()->get('form_data');

//     if (!$data) {
//         return redirect()->route('form.index'); // Redirect if no data
//     }

//     return view('download', compact('data'));
// }

public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'occasion' => 'required',
            'guests' => 'required',
            'event_repeat' => 'required',
            // Add validation for other fields as necessary
        ]);

        // Event::create($validatedData);

        // Redirect to the confirmation page
        return view('download', compact('validatedData'));
    }

}







